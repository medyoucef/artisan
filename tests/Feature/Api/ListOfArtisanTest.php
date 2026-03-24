<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use App\Models\Profession;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListOfArtisanTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_artisans_list()
    {
        $profession = Profession::factory()->create();

        Artisan::factory()->count(3)->create([
            'profession' => $profession->id
        ]);

        $response = $this->get('/artisans');

        $response->assertStatus(200);
        $response->assertSee($profession->nom);
    }
}
