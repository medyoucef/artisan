<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\BookingService;
use Carbon\Carbon;

class BookingServiceTest extends TestCase
{
    public function test_can_book()
    {
        $service = new BookingService();

        $existing = [
            Carbon::parse('2024-01-01 10:00'),
        ];

        $requested = Carbon::parse('2024-01-01 11:00');

        $this->assertTrue($service->canBook($existing, $requested));
    }

    public function test_cannot_book_if_conflict()
    {
        $service = new BookingService();

        $existing = [
            Carbon::parse('2024-01-01 10:00'),
        ];

        $requested = Carbon::parse('2024-01-01 10:00');

        $this->assertFalse($service->canBook($existing, $requested));
    }

//     public function calculateDuration(Carbon $start, Carbon $end): int
// {
//     return $start->diffInMinutes($end);
// }


    public function test_generate_booking_number()
    {
        $service = new BookingService();

        $number = $service->generateBookingNumber();

        $this->assertStringStartsWith('BK-', $number);
        $this->assertGreaterThan(5, strlen($number));
    }
}
