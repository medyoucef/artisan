<?php

namespace Tests\Feature\Artisan;

use Tests\TestCase;
use App\Models\User;
use App\Models\Artisan;
use App\Models\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserJourneyTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_registers_logs_in_searches_artisan_and_contacts_him()
    {
        /* 1. Inscription */
        $register = $this->post('/register', [
            'name' => 'Karim',
            'username' => 'karim123',
            'type_user' => 'client',
            'email' => 'karim@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $register->assertRedirect('/');
        $this->assertAuthenticated();

        $user = User::first();

        /* 2. Déconnexion + reconnexion */
        $this->post('/logout');

        $login = $this->post('/login', [
            'email' => 'karim@example.com',
            'password' => 'password123',
        ]);

        $login->assertRedirect('/');
        $this->assertAuthenticatedAs($user);

        /* 3. Artisan existant */
        $profession = Profession::factory()->create(['name' => 'Plombier']);

        $artisan = Artisan::factory()->create([
            'nom' => 'Ahmed',
            'profession' => $profession->id,
            'ville' => 'Montreal',
        ]);

        /* 4. Recherche artisan */
        $search = $this->get('/artisans?profession=' . $profession->id);

        $search->assertStatus(200);
        $search->assertSee('Ahmed');

        /* 5. Contact artisan */
        $contact = $this->post('/messages', [
            'name' => 'Karim',
            'email' => 'karim@example.com',
            'subject' => 'Demande de service',
            'message' => 'Bonjour, j’ai besoin d’un service.',
        ]);

        $contact->assertRedirect();

        $this->assertDatabaseHas('messages', [
            'email' => 'karim@example.com',
        ]);
    }
}
