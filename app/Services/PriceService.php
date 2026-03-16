<?php

namespace App\Services;

class PriceService
{
    public function calculateTotal($price, $tax)
    {
        return $price + ($price * $tax);
    }
}
