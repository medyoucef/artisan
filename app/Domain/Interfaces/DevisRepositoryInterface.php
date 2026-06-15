<?php

namespace App\Domain\Interfaces;

interface DevisRepositoryInterface
{
    public function create(array $data);
    public function findById($id);
    public function getByConversation($conversationId);
    public function updateStatus($id, string $status);
}
