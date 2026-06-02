<?php

namespace App\States\Devis;

class AccepteState implements DevisState
{
    public function name(): string
    {
        return 'accepté';
    }

    public function label(): string
    {
        return 'Accepté';
    }

    public function accept(): DevisState
    {
        throw new InvalidDevisTransition('Un devis déjà accepté ne peut pas être accepté à nouveau.');
    }

    public function refuse(): DevisState
    {
        throw new InvalidDevisTransition('Un devis accepté ne peut pas être refusé.');
    }

    public function isFinal(): bool
    {
        return true;
    }
}
