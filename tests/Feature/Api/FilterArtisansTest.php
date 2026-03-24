<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use App\Models\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FilterArtisansTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_filter_artisans_by_profession()
    {
        $profession = Profession::factory()->create(['nom' => 'Plombier']);

        Artisan::factory()->create(['profession' => $profession->id]);
        Artisan::factory()->create(); // autre artisan

        $response = $this->get('/artisans?profession=' . $profession->id);

        $response->assertStatus(200);
        $response->assertSee($profession->nom);
    }
}
