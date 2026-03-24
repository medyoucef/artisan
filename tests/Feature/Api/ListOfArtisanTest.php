<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListOfArtisanTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_artisans_list()
    {
        Artisan::factory()->count(3)->create();

        $response = $this->getJson('/api/artisans');

        $response->assertStatus(200)
                 ->assertJsonCount(3);
    }
}
