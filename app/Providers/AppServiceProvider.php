<?php

namespace App\Providers;

use App\Repositories\DevisRepositoryInterface;
use App\Repositories\EloquentDevisRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(DevisRepositoryInterface::class, EloquentDevisRepository::class);
    }

    public function boot(): void
    {
        //
    }
}
