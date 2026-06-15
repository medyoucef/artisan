<?php

namespace App\Infrastructure\Factories;

use App\Models\Conversation;

class ConversationFactory implements FactoryInterface
{
    public function create(array $data)
    {
        return new Conversation([
            'artisan_id' => $data['artisan_id'],
            'client_id' => $data['client_id'],
        ]);
    }
}
