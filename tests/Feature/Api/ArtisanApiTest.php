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
        'profession' => 'Plombier',
        'ville' => 'Montreal',
    ];

    $response = $this->postJson('/api/artisans', $data);

    $response->assertStatus(201)
             ->assertJsonFragment(['nom' => 'Karim']);

    $this->assertDatabaseHas('artisans', ['nom' => 'Karim']);
}

}
