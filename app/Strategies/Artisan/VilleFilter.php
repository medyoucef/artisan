<?php

namespace App\Strategies\Artisan;

use Illuminate\Database\Eloquent\Builder;

class VilleFilter implements ArtisanFilter
{
    public function apply(Builder $query, string $value): void
    {
        $query->where('ville', 'like', "%{$value}%");
    }
}
