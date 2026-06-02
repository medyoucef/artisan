<?php

namespace App\Providers;

use App\Repositories\ArtisanRepositoryInterface;
use App\Repositories\DevisRepositoryInterface;
use App\Repositories\EloquentArtisanRepository;
use App\Repositories\EloquentDevisRepository;
use App\Strategies\Artisan\ProfessionFilter;
use App\Strategies\Artisan\VilleFilter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DevisRepositoryInterface::class, EloquentDevisRepository::class);

        // Artisan search: the set of filter strategies is configured here,
        // so filters can be added/swapped without touching the repository.
        $this->app->bind(ArtisanRepositoryInterface::class, function () {
            return new EloquentArtisanRepository([
                'profession' => new ProfessionFilter(),
                'ville'      => new VilleFilter(),
            ]);
        });
    }

    public function boot(): void
    {
        //
    }
}
