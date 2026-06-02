<?php

namespace App\Strategies\Artisan;

use Illuminate\Database\Eloquent\Builder;

class ProfessionFilter implements ArtisanFilter
{
    /**
     * Filter by profession.
     *
     * A numeric value is treated as the profession id (the `profession`
     * column is a foreign key). Free text is matched against the related
     * profession name, which is what lets the search form's "électricien"
     * actually find electricians.
     */
    public function apply(Builder $query, string $value): void
    {
        if (ctype_digit($value)) {
            $query->where('profession', (int) $value);

            return;
        }

        $query->whereHas('professionRelation', function (Builder $q) use ($value) {
            $q->where('name', 'like', "%{$value}%");
        });
    }
}
