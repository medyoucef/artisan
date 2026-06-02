<?php

namespace App\Repositories;

use App\Models\Devis;
use Illuminate\Database\Eloquent\Collection;

class EloquentDevisRepository implements DevisRepositoryInterface
{
    public function findOrFail(int $id): Devis
    {
        return Devis::findOrFail($id);
    }

    public function create(array $data): Devis
    {
        return Devis::create($data);
    }

    public function save(Devis $devis): void
    {
        $devis->save();
    }

    public function forClient(int $clientId): Collection
    {
        return Devis::where('client_id', $clientId)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
