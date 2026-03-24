<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\ArtisanProfileService;
use App\Models\Artisan;

class ArtisanProfileServiceTest extends TestCase
{
    public function test_normalize_data()
    {
        $service = new ArtisanProfileService();

        $data = [
            'nom' => '  karim ',
            'ville' => ' montreal ',
        ];

        $normalized = $service->normalizeData($data);

        $this->assertEquals('Karim', $normalized['nom']);
        $this->assertEquals('Montreal', $normalized['ville']);
    }

    public function test_profile_is_complete()
    {
        $service = new ArtisanProfileService();

        $artisan = new Artisan([
            'nom' => 'Karim',
            'ville' => 'Montreal',
            'adresse' => '123 rue X'
        ]);

        $this->assertTrue($service->isProfileComplete($artisan));
    }

    public function test_profile_is_not_complete()
    {
        $service = new ArtisanProfileService();

        $artisan = new Artisan([
            'nom' => 'Karim',
            'ville' => '',
            'adresse' => '123 rue X'
        ]);

        $this->assertFalse($service->isProfileComplete($artisan));
    }

    public function test_profile_summary()
    {
        $service = new ArtisanProfileService();

        $artisan = new Artisan([
            'nom' => 'Karim',
            'profession' => 'Plombier',
            'ville' => 'Montreal'
        ]);

        $summary = $service->getProfileSummary($artisan);

        $this->assertEquals('Karim — Plombier (Montreal)', $summary);
    }
}
