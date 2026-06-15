<?php

namespace App\Infrastructure\Factories;

use App\Models\MessagesUserArt;

class MessageFactory implements FactoryInterface
{
    public function create(array $data)
    {
        return new MessagesUserArt([
            'conversation_id' => $data['conversation_id'],
            'sender_id'       => $data['sender_id'],
            'receiver_id'     => $data['receiver_id'],   
            'message'         => $data['message'],      
            'type'            => $data['type'] ?? 'texte',
        ]);
    }
}
