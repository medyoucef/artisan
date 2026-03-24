<?php

namespace Tests\Feature\Artisan;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Test_user_cannot_join_twice extends TestCase
{
    use RefreshDatabase;

    public function test_user_cannot_join_twice()
{
    $user = \App\Models\User::factory()->create([
        'name' => 'Karim',
        'ville' => 'Montreal',
        'adresse' => '123 rue X',
    ]);

    Artisan::factory()->create([
        'nom' => 'Karim',
        'profession' => 'Plombier'
    ]);

    $this->actingAs($user);

    $response = $this->post('/artisans/rejoindre', [
        'profession' => 'Plombier'
    ]);

    $response->assertRedirect();
    $response->assertSessionHas('success', 'Vous êtes déjà enregistré comme artisan.');
}

}
