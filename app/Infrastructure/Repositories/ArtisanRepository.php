<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\ArtisanRepositoryInterface;
use App\Models\Artisan;

class ArtisanRepository implements ArtisanRepositoryInterface
{
    /**
     * Recherche classique (ancienne méthode)
     * — toujours conservée pour compatibilité
     */
    public function search(array $filters)
    {
        $query = Artisan::with('professionRelation');

        if (!empty($filters['profession'])) {
            $query->where('profession', $filters['profession']);
        }

        if (!empty($filters['ville'])) {
            $query->where('ville', 'like', '%' . $filters['ville'] . '%');
        }

        return $query->get();
    }

    /**
     * Méthode utilisée par le Strategy Pattern
     * — point d’entrée pour construire la query
     */
    public function baseQuery()
    {
        return Artisan::query()->with('professionRelation');
    }

    /**
     * Méthode utilisée par le Strategy Pattern
     * — finalise la recherche
     */
    public function finalizeSearch($query)
    {
        return $query->get();
    }

    /**
     * Vérifie si un artisan existe déjà pour un user_id
     */
    public function existsByUserId(int $userId): bool
    {
        return Artisan::where('user_id', $userId)->exists();
    }

    /**
     * Crée un artisan à partir des données utilisateur
     */
    public function createFromUser(array $data)
    {
        return Artisan::create($data);
    }
}
