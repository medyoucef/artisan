<?php

namespace App\Services;

use Carbon\Carbon;

class AvailabilityService
{
    public function hasConflict(array $existingBookings, Carbon $requested): bool
    {
        foreach ($existingBookings as $booking) {
            if ($booking->format('Y-m-d H:i') === $requested->format('Y-m-d H:i')) {
                return true;
            }
        }
        return false;
    }

    public function isAvailable(array $existingBookings, Carbon $requested): bool
    {
        return !$this->hasConflict($existingBookings, $requested);
    }

    public function nextAvailableSlot(array $existingBookings, Carbon $start): Carbon
    {
        $slot = $start->copy();

        while ($this->hasConflict($existingBookings, $slot)) {
            $slot->addMinutes(30);
        }

        return $slot;
    }
}
