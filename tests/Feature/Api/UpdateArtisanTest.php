<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateArtisanTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_update_artisan_via_api()
{
    $artisan = Artisan::factory()->create([
        'nom' => 'Karim',
        'profession' => 1, // ou Profession::factory()

    ]);

    $response = $this->putJson("/api/artisans/{$artisan->id}", [
        'nom' => 'Karim Updated',
        'profession' => 'Électricien'
    ]);

    $response->assertStatus(200)
             ->assertJsonFragment(['nom' => 'Karim Updated']);

    $this->assertDatabaseHas('artisans', [
        'id' => $artisan->id,
        'profession' => 'Électricien'
    ]);
}

}
