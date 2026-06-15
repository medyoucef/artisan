<?php

namespace App\Domain\Interfaces;

interface DashboardRepositoryInterface
{
    public function getStats();
    public function getArtisans();
    public function getSocietes();
    public function getUsers();
    public function getMessages();
    public function getProfessions();
}
