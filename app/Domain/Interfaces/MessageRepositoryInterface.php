<?php

namespace App\Domain\Interfaces;

interface MessageRepositoryInterface
{
    public function getByConversation($conversationId);
    public function sendMessage(array $data);
    public function save($message);

}
