<?php

namespace Tests\Feature\Artisan;

use Tests\TestCase;
use App\Models\User;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserJourneyTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_registers_logs_in_searches_artisan_and_contacts_him()
    {
        /* ---------------------------------------------------------
         | 1. L’utilisateur s’inscrit
         --------------------------------------------------------- */
        $register = $this->post('/register', [
            'name' => 'Karim',
            'email' => 'karim@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ]);

        $register->assertRedirect('/home');
        $this->assertAuthenticated();

        $user = User::first();


        /* ---------------------------------------------------------
         | 2. L’utilisateur se déconnecte puis se reconnecte
         --------------------------------------------------------- */
        $this->post('/logout');

        $login = $this->post('/login', [
            'email' => 'karim@example.com',
            'password' => 'password123',
        ]);

        $login->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);


        /* ---------------------------------------------------------
         | 3. Un artisan existe dans la base
         --------------------------------------------------------- */
        $artisan = Artisan::factory()->create([
            'nom' => 'Ahmed',
            'profession' => 'Plombier',
            'ville' => 'Montreal',
        ]);


        /* 
         | 4. L’utilisateur recherche un artisan
         */
        $search = $this->get('/artisans?profession=Plombier');

        $search->assertStatus(200);
        $search->assertSee('Plombier');
        $search->assertSee('Ahmed');


        /* ---------------------------------------------------------
         | 5. L’utilisateur contacte l’artisan via /messages
         --------------------------------------------------------- */
        $contact = $this->post('/messages', [
            'name' => 'Karim',
            'email' => 'karim@example.com',
            'message' => 'Bonjour, j’ai besoin d’un service.',
        ]);

        $contact->assertRedirect(); // MessageController redirige après envoi
        $this->assertDatabaseHas('messages', [
            'email' => 'karim@example.com',
        ]);
    }
}
