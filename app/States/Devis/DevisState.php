<?php

namespace App\States\Devis;

interface DevisState
{
    public function name(): string;

    public function label(): string;

    public function accept(): DevisState;

    public function refuse(): DevisState;

    public function isFinal(): bool;
}
