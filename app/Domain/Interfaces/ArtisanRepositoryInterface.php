<?php

namespace App\Domain\Interfaces;

interface ArtisanRepositoryInterface
{
    public function search(array $filters);
    public function existsByUserId(int $userId): bool;
    public function createFromUser(array $data);
}

