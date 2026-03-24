<?php

namespace App\Services;

use Carbon\Carbon;

class BookingService
{
    public function canBook(array $existingBookings, Carbon $requested): bool
    {
        foreach ($existingBookings as $booking) {
            if ($booking->format('Y-m-d H:i') === $requested->format('Y-m-d H:i')) {
                return false;
            }
        }
        return true;
    }

    public function calculateDuration(Carbon $start, Carbon $end): int
{
    dd('VERSION UTILISÉE PAR PHPSTAN');
    return $start->diffInMinutes($end);
}


    public function generateBookingNumber(): string
    {
        return 'BK-' . strtoupper(uniqid());
    }
}
