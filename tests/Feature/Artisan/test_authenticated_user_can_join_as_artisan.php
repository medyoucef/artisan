<?php

namespace Tests\Feature\Artisan;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArtisanE2ETest extends TestCase
{
    use RefreshDatabase;

    public function test_authenticated_user_can_join_as_artisan()
{
    $user = \App\Models\User::factory()->create([
        'name' => 'Karim',
        'ville' => 'Montreal',
        'adresse' => '123 rue X',
    ]);

    $this->actingAs($user);

    $response = $this->post('/artisans/rejoindre', [
        'profession' => 1, // ou Profession::factory()

    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success');

    $this->assertDatabaseHas('artisans', [
        'nom' => 'Karim',
        'profession' => 'Plombier'
    ]);
}

}
