<?php

namespace App\Infrastructure\Factories;

use App\Models\Devis;

class DevisFactory implements FactoryInterface
{
    public function create(array $data)
    {
        return new Devis([
            'montant' => $data['montant'],
            'statut' => $data['statut'] ?? 'en_attente',
            'conversation_id' => $data['conversation_id'],
            'artisan_id' => $data['artisan_id'],
            'client_id' => $data['client_id'],
        ]);
    }
}
