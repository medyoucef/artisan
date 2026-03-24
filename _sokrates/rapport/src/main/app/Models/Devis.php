<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = [
        'conversation_id',
        'artisan_id',
        'client_id',
        'montant',
        'description',
        'statut',
    ];

    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }

    public function artisan()
    {
        return $this->belongsTo(User::class, 'artisan_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}

