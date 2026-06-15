<?php

namespace App\Application\Services;

use App\Domain\Artisan\Filters\FilterByCity;
use App\Domain\Artisan\Filters\FilterByProfession;

class ArtisanFilterManager
{
    public function getStrategies(array $filters): array
    {
        $strategies = [];

        if (!empty($filters['profession'])) {
            $strategies[] = [new FilterByProfession(), $filters['profession']];
        }

        if (!empty($filters['ville'])) {
            $strategies[] = [new FilterByCity(), $filters['ville']];
        }

        return $strategies;
    }
}
