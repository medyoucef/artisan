<?php

namespace App\Domain\Events;

use App\Models\Devis;

class DevisCreated
{
    public Devis $devis;

    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }
}
