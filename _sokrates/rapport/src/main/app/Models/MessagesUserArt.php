<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessagesUserArt extends Model
{
    protected $table = 'messages_user_art';

    protected $fillable = [
        'conversation_id',
        'sender_id',
        'receiver_id',
        'message',
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}

