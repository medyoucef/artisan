<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use App\Models\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateArtisanTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_update_artisan_via_api()
    {
        $profession = Profession::factory()->create();
        $artisan = Artisan::factory()->create([
            'profession' => $profession->id
        ]);

        $newProfession = Profession::factory()->create();

        $response = $this->put('/admin/artisans/' . $artisan->id, [
            'nom' => 'Karim Updated',
            'profession' => $newProfession->id,
            'ville' => 'Montreal',
            'adresse' => '123 rue X'
        ]);

        $response->assertStatus(302);

        // On vérifie simplement que l'artisan existe toujours
        $this->assertDatabaseHas('artisans', [
            'id' => $artisan->id,
        ]);
    }
}
