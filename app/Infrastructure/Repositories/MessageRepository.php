<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\MessageRepositoryInterface;
use App\Models\MessagesUserArt;

class MessageRepository implements MessageRepositoryInterface
{
    /**
     * Récupère les messages d'une conversation
     */
    public function getByConversation($conversationId)
    {
        return MessagesUserArt::where('conversation_id', $conversationId)
            ->orderBy('created_at')
            ->get();
    }

    /**
     * Envoie un message (ancienne méthode utilisée avant Factory)
     */
    public function sendMessage(array $data)
    {
        return MessagesUserArt::create($data);
    }

    /**
     * Sauvegarde un message créé via MessageFactory
     */
    public function save($message)
    {
        $message->save();
        return $message;
    }
}
