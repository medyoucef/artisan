<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtisanApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_artisan_via_api()
    {
        $data = [
            'nom' => 'Karim',
            'profession' => 1, // profession = ID (INT)
            'ville' => 'Montreal',
            'adresse' => '123 rue X'
        ];

        // IMPORTANT : utiliser post() et non postJson()
        $response = $this->post('/admin/artisans/store', $data);

        // La route renvoie une redirection (302)
        $response->assertStatus(302);
        $response->assertRedirect(); // confirme la redirection

        // Vérifier que l'artisan a été créé
        $this->assertDatabaseHas('artisans', [
            'nom' => 'Karim',
            'profession' => 1,
        ]);
    }
}
