<?php

namespace App\Providers;

use App\Domain\Events\DevisCreated;
use App\Application\Listeners\SendDevisNotification;
use Illuminate\Support\Facades\Event;

use App\Domain\Interfaces\ArtisanRepositoryInterface;
use App\Infrastructure\Repositories\ArtisanRepository;
use App\Domain\Interfaces\ConversationRepositoryInterface;
use App\Domain\Interfaces\MessageRepositoryInterface;
use App\Domain\Interfaces\DevisRepositoryInterface;

use App\Infrastructure\Repositories\ConversationRepository;
use App\Infrastructure\Repositories\MessageRepository;
use App\Infrastructure\Repositories\DevisRepository;


use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
{
    $this->app->bind(ArtisanRepositoryInterface::class, ArtisanRepository::class);
    $this->app->bind(ConversationRepositoryInterface::class, ConversationRepository::class);
    $this->app->bind(MessageRepositoryInterface::class, MessageRepository::class);
    $this->app->bind(DevisRepositoryInterface::class, DevisRepository::class);
    $this->app->bind(DevisRepositoryInterface::class, DevisRepository::class);
    $this->app->bind(
        \App\Domain\Interfaces\DashboardRepositoryInterface::class,
        \App\Infrastructure\Repositories\DashboardRepository::class
    );
    $this->app->singleton(\App\Infrastructure\Factories\DevisFactory::class);
    $this->app->singleton(\App\Infrastructure\Factories\MessageFactory::class);
    $this->app->singleton(\App\Infrastructure\Factories\ConversationFactory::class);
    $this->app->singleton(\App\Infrastructure\Factories\ArtisanFactory::class);

}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
{
    
}
}
