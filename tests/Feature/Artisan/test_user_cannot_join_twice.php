<?php

namespace Tests\Feature\Artisan;

use Tests\TestCase;
use App\Models\Artisan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtisanCannotJoinTwiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_cannot_join_twice()
    {
        // Création d'un utilisateur
        $user = User::factory()->create([
            'name' => 'Karim',
            'ville' => 'Montreal',
            'adresse' => '123 rue X',
        ]);

        // Artisan déjà existant avec le même nom
        Artisan::factory()->create([
            'nom' => 'Karim',
            'profession' => 1, // profession = ID
        ]);

        // L'utilisateur est connecté
        $this->actingAs($user);

        // Tentative de rejoindre comme artisan
        $response = $this->post('/rejoindre-artisan', [
            'profession' => 1
        ]);

        // Vérifie la redirection
        $response->assertRedirect();

        // Vérifie le message de session
        $response->assertSessionHas('success', 'Vous êtes déjà enregistré comme artisan.');
    }
}
