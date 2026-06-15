<?php

namespace App\Domain\Interfaces;

interface ConversationRepositoryInterface
{
    public function findBetween($userId, $artisanId);
    public function create($userId, $artisanId);
    public function findById($id);
    public function getForArtisan($artisanId);
}
