<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;

interface ArtisanRepositoryInterface
{
    /**
     * Return artisans matching the given criteria.
     *
     * @param array<string, mixed> $criteria keyed by filter name (profession, ville, ...)
     */
    public function search(array $criteria): Collection;
}
