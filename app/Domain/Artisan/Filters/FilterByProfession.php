<?php

namespace App\Domain\Artisan\Filters;

use Illuminate\Database\Eloquent\Builder;

class FilterByProfession implements ArtisanFilterStrategy
{
    public function apply(Builder $query, $value): Builder
    {
        return $query->where('profession', 'like', "%$value%");
    }
}
