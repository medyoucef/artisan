<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\PriceService;

class PriceServiceTest extends TestCase
{
    public function test_calculate_base_price()
    {
        $service = new PriceService();

        $price = $service->calculateBasePrice(120, 50); // 2h × 50$

        $this->assertEquals(100, $price);
    }

    public function test_apply_discount()
    {
        $service = new PriceService();

        $price = $service->applyDiscount(100, 10); // -10%

        $this->assertEquals(90, $price);
    }

    public function test_apply_tax()
    {
        $service = new PriceService();

        $price = $service->applyTax(100);

        $this->assertEquals(115, $price); // 15% tax
    }

    public function test_final_price()
    {
        $service = new PriceService();

        $price = $service->finalPrice(60, 40, 10); // 1h × 40$ -10% +15%

        $this->assertEquals(41.4, round($price, 2));
    }
}
