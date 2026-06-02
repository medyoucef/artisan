<?php

namespace App\Repositories;

use App\Models\Artisan;
use App\Strategies\Artisan\ArtisanFilter;
use Illuminate\Database\Eloquent\Collection;

class EloquentArtisanRepository implements ArtisanRepositoryInterface
{
    /**
     * @param array<string, ArtisanFilter> $filters map of criterion key => filter strategy
     */
    public function __construct(private array $filters)
    {
    }

    public function search(array $criteria): Collection
    {
        $query = Artisan::with('professionRelation');

        foreach ($this->filters as $key => $filter) {
            $value = $criteria[$key] ?? null;

            if (is_string($value) && trim($value) !== '') {
                $filter->apply($query, $value);
            }
        }

        return $query->get();
    }
}
