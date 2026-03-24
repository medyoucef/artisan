<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\AvailabilityService;
use Carbon\Carbon;

class AvailabilityServiceTest extends TestCase
{
    public function test_has_conflict()
    {
        $service = new AvailabilityService();

        $existing = [
            Carbon::parse('2024-01-01 10:00'),
        ];

        $requested = Carbon::parse('2024-01-01 10:00');

        $this->assertTrue($service->hasConflict($existing, $requested));
    }

    public function test_is_available()
    {
        $service = new AvailabilityService();

        $existing = [
            Carbon::parse('2024-01-01 10:00'),
        ];

        $requested = Carbon::parse('2024-01-01 11:00');

        $this->assertTrue($service->isAvailable($existing, $requested));
    }

    public function test_next_available_slot()
    {
        $service = new AvailabilityService();

        $existing = [
            Carbon::parse('2024-01-01 10:00'),
        ];

        $start = Carbon::parse('2024-01-01 10:00');

        $slot = $service->nextAvailableSlot($existing, $start);

        $this->assertEquals('2024-01-01 10:30', $slot->format('Y-m-d H:i'));
    }
}
