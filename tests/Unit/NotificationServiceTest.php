<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\NotificationService;

class NotificationServiceTest extends TestCase
{
    public function test_format_message()
    {
        $service = new NotificationService();

        $msg = $service->formatMessage('hello', 'info');

        $this->assertEquals('INFO: hello', $msg);
    }

    public function test_notify_artisan()
    {
        $service = new NotificationService();

        $artisan = (object) ['nom' => 'Karim'];

        $result = $service->notifyArtisan($artisan, 'Votre rendez-vous');

        $this->assertEquals('Karim', $result['recipient']);
        $this->assertStringContainsString('ARTISAN:', $result['message']);
    }

    public function test_notify_client()
    {
        $service = new NotificationService();

        $client = (object) ['name' => 'Sarah'];

        $result = $service->notifyClient($client, 'Confirmation');

        $this->assertEquals('Sarah', $result['recipient']);
        $this->assertStringContainsString('CLIENT:', $result['message']);
    }
}
