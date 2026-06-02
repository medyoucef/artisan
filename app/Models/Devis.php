<?php

namespace App\Models;

use App\States\Devis\AccepteState;
use App\States\Devis\DevisState;
use App\States\Devis\EnAttenteState;
use App\States\Devis\InvalidDevisTransition;
use App\States\Devis\RefuseState;
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

    public function state(): DevisState
    {
        return match ($this->statut) {
            'en_attente' => new EnAttenteState(),
            'accepté'    => new AccepteState(),
            'refusé'     => new RefuseState(),
            default      => throw new InvalidDevisTransition("Statut inconnu : {$this->statut}"),
        };
    }

    public function accept(): void
    {
        $this->statut = $this->state()->accept()->name();
    }

    public function refuse(): void
    {
        $this->statut = $this->state()->refuse()->name();
    }
}

