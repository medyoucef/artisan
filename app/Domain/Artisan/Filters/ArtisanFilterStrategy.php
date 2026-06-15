<?php

namespace App\Domain\Artisan\Filters;

use Illuminate\Database\Eloquent\Builder;

interface ArtisanFilterStrategy
{
    public function apply(Builder $query, $value): Builder;
}
