<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\ConversationRepositoryInterface;
use App\Models\Conversation;

class ConversationRepository implements ConversationRepositoryInterface
{
    public function findBetween($userId, $artisanId)
    {
        return Conversation::where('user_id', $userId)
            ->where('artisan_id', $artisanId)
            ->first();
    }

    public function create($userId, $artisanId)
    {
        return Conversation::create([
            'user_id' => $userId,
            'artisan_id' => $artisanId,
        ]);
    }

    public function findById($id)
{
    return Conversation::with('artisan')->findOrFail($id);
}


    public function getForArtisan($artisanId)
    {
        return Conversation::where('artisan_id', $artisanId)
            ->with('user')
            ->get();
    }
}
