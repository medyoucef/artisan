<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Services\PriceService;

class PriceServiceTest extends TestCase
{
    public function test_calculate_total_returns_correct_value()
    {
        $service = new PriceService();

        $result = $service->calculateTotal(100, 0.15);

        $this->assertEquals(115, $result);
    }
}
