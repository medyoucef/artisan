<?php

namespace App\Application\Services;

use App\Domain\Interfaces\DashboardRepositoryInterface;

class DashboardService
{
    protected DashboardRepositoryInterface $repo;

    public function __construct(DashboardRepositoryInterface $repo)
    {
        $this->repo = $repo;
    }

    public function getDashboardStats()
    {
        return $this->repo->getStats();
    }

    public function listArtisans()
    {
        return $this->repo->getArtisans();
    }

    public function listSocietes()
    {
        return $this->repo->getSocietes();
    }

    public function listUsers()
    {
        return $this->repo->getUsers();
    }

    public function listMessages()
    {
        return $this->repo->getMessages();
    }

    public function listProfessions()
    {
        return $this->repo->getProfessions();
    }
}
