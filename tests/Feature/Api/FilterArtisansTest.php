<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FilterArtisansTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_filter_artisans_by_city()
{
    Artisan::factory()->create(['ville' => 'Montreal']);
    Artisan::factory()->create(['ville' => 'Quebec']);

    $response = $this->getJson('/api/artisans?ville=Montreal');

    $response->assertStatus(200)
             ->assertJsonCount(1)
             ->assertJsonFragment(['ville' => 'Montreal']);
}

}
