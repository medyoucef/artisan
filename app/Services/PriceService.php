<?php

namespace App\Services;

class PriceService
{
    const TAX_RATE = 0.15; // 15% 

    public function calculateBasePrice(int $durationMinutes, float $ratePerHour): float
    {
        $hours = $durationMinutes / 60;
        return $hours * $ratePerHour;
    }

    public function applyDiscount(float $price, float $percentage): float
    {
        return $price - ($price * ($percentage / 100));
    }

    public function applyTax(float $price): float
    {
        return $price + ($price * self::TAX_RATE);
    }

    public function finalPrice(int $durationMinutes, float $ratePerHour, float $discount = 0): float
    {
        $price = $this->calculateBasePrice($durationMinutes, $ratePerHour);

        if ($discount > 0) {
            $price = $this->applyDiscount($price, $discount);
        }

        return $this->applyTax($price);
    }
}
