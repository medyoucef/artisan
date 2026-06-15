<?php

namespace App\Domain\Artisan\Filters;

use Illuminate\Database\Eloquent\Builder;

class FilterByCity implements ArtisanFilterStrategy
{
    public function apply(Builder $query, $value): Builder
    {
        return $query->where('ville', 'like', "%$value%");
    }
}
