<?php

namespace App\Repositories;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Collection;

interface DevisRepositoryInterface
{
    public function findOrFail(int $id): Devis;

    public function create(array $data): Devis;

    public function save(Devis $devis): void;

    public function forClient(int $clientId): Collection;
}
