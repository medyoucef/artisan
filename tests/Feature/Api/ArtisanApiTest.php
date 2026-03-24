<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtisanApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_artisan_via_api()
    {
        $profession = Profession::factory()->create();

        $data = [
            'nom' => 'Karim',
            'profession' => $profession->id,
            'ville' => 'Montreal',
            'adresse' => '123 rue X'
        ];

        $response = $this->post('/admin/artisans/store', $data);

        $response->assertStatus(302);

        $this->assertDatabaseHas('artisans', [
            'nom' => 'Karim',
            'profession' => $profession->id,
        ]);
    }
}
