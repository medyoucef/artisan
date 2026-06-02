<?php

namespace Tests\Feature\Artisan;

use App\Models\Artisan;
use App\Models\Profession;
use App\Models\User;
use Tests\TestCase;

class ArtisanSearchTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        // The artisan results block on /artisans is gated behind @auth,
        // so requests must be authenticated to see the list.
        $this->actingAs(User::factory()->create());

        $plombier    = Profession::create(['name' => 'Plombier']);
        $electricien = Profession::create(['name' => 'Électricien']);

        Artisan::create(['nom' => 'ArtisanAlpha', 'profession' => $plombier->id, 'ville' => 'Montreal']);
        Artisan::create(['nom' => 'ArtisanBeta', 'profession' => $electricien->id, 'ville' => 'Laval']);
    }

    public function test_index_with_no_filters_returns_all_artisans(): void
    {
        $response = $this->get('/artisans');

        $response->assertOk();
        $response->assertSee('ArtisanAlpha');
        $response->assertSee('ArtisanBeta');
    }

    public function test_index_filters_by_ville(): void
    {
        $response = $this->get('/artisans?ville=Montreal');

        $response->assertOk();
        $response->assertSee('ArtisanAlpha');
        $response->assertDontSee('ArtisanBeta');
    }

    public function test_index_filters_by_profession_name(): void
    {
        // Typing the profession *name* must work (previously compared name to an id).
        $response = $this->get('/artisans?profession=Plomb');

        $response->assertOk();
        $response->assertSee('ArtisanAlpha');
        $response->assertDontSee('ArtisanBeta');
    }

    public function test_search_endpoint_returns_filtered_json(): void
    {
        $response = $this->getJson('/artisans/search?ville=Laval');

        $response->assertOk();
        $response->assertJsonStructure(['html']);
        $this->assertStringContainsString('ArtisanBeta', $response->json('html'));
        $this->assertStringNotContainsString('ArtisanAlpha', $response->json('html'));
    }
}
