<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\DashboardRepositoryInterface;
use App\Domain\Entities\DashboardStats;
use App\Models\User;
use App\Models\Artisan;
use App\Models\SocieteArtisan;
use App\Models\Message;
use App\Models\Profession;
use App\Models\Devis;

class DashboardRepository implements DashboardRepositoryInterface
{
    public function getStats()
    {
        return new DashboardStats(
            User::count(),
            Artisan::count(),
            SocieteArtisan::count(),
            Message::count(),
            Profession::count(),
            Devis::count()
        );
    }

    public function getArtisans()
    {
        return Artisan::all();
    }

    public function getSocietes()
    {
        return SocieteArtisan::all();
    }

    public function getUsers()
    {
        return User::all();
    }

    public function getMessages()
    {
        return Message::all();
    }

    public function getProfessions()
    {
        return Profession::all();
    }
}
