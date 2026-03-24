<?php

namespace Tests\Feature\Artisan;

use Tests\TestCase;
use App\Models\Artisan;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Test_user_can_view_artisans_page extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_view_artisans_page()
    {
        Artisan::factory()->count(3)->create();

        $response = $this->get('/artisans');

        $response->assertStatus(200);
        $response->assertViewIs('front.art_ind');
        $response->assertSeeText(Artisan::first()->nom);
    }
}
