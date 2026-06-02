<?php

namespace App\States\Devis;

class RefuseState implements DevisState
{
    public function name(): string
    {
        return 'refusé';
    }

    public function label(): string
    {
        return 'Refusé';
    }

    public function accept(): DevisState
    {
        throw new InvalidDevisTransition('Un devis refusé ne peut pas être accepté.');
    }

    public function refuse(): DevisState
    {
        throw new InvalidDevisTransition('Un devis déjà refusé ne peut pas être refusé à nouveau.');
    }

    public function isFinal(): bool
    {
        return true;
    }
}
