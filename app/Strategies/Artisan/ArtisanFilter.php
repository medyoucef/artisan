<?php

namespace App\Strategies\Artisan;

use Illuminate\Database\Eloquent\Builder;

interface ArtisanFilter
{
    /**
     * Apply this filter's criterion to the artisan query.
     */
    public function apply(Builder $query, string $value): void;
}
