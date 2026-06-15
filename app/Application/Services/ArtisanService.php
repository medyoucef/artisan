<?php

namespace App\Application\Services;

use App\Domain\Interfaces\ArtisanRepositoryInterface;
use App\Infrastructure\Factories\ArtisanFactory;
use Illuminate\Support\Facades\Auth;

class ArtisanService
{
    private ArtisanRepositoryInterface $repo;
    private ArtisanFilterManager $filterManager;
    private ArtisanFactory $artisanFactory;

    public function __construct(
        ArtisanRepositoryInterface $repo,
        ArtisanFilterManager $filterManager,
        ArtisanFactory $artisanFactory
    ) {
        $this->repo = $repo;
        $this->filterManager = $filterManager;
        $this->artisanFactory = $artisanFactory;
    }

    public function search(array $filters)
    {
        $query = $this->repo->baseQuery();

        foreach ($this->filterManager->getStrategies($filters) as [$strategy, $value]) {
            $query = $strategy->apply($query, $value);
        }

        return $this->repo->finalizeSearch($query);
    }

    public function registerAsArtisan(int $professionId): array
    {
        $user = Auth::user();

        if ($this->repo->existsByUserId($user->id)) {
            return [
                'success' => false,
                'message' => "Vous êtes déjà enregistré comme artisan."
            ];
        }

        // ✔ Création via Factory Method
        $artisan = $this->artisanFactory->create([
            'user_id'       => $user->id,
            'nom'           => $user->name,
            'profession_id' => $professionId,
            'ville'         => $user->ville,
            'adresse'       => $user->adresse,
            'telephone'     => $user->telephone,
        ]);

        $this->repo->save($artisan);

        return [
            'success' => true,
            'message' => "Bienvenue parmi les artisans !"
        ];
    }
}
