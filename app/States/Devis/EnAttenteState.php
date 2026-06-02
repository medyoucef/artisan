<?php

namespace App\States\Devis;

class EnAttenteState implements DevisState
{
    public function name(): string
    {
        return 'en_attente';
    }

    public function label(): string
    {
        return 'En attente';
    }

    public function accept(): DevisState
    {
        return new AccepteState();
    }

    public function refuse(): DevisState
    {
        return new RefuseState();
    }

    public function isFinal(): bool
    {
        return false;
    }
}
