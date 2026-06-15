<?php

namespace App\Infrastructure\Repositories;

use App\Domain\Interfaces\DevisRepositoryInterface;
use App\Models\Devis;

class DevisRepository implements DevisRepositoryInterface
{
    /**
     * Création d’un devis via Factory Method
     * (la Factory crée l’objet, le Repository le sauvegarde)
     */
    public function create(array $data)
    {
        return new Devis($data);
    }

    /**
     * Sauvegarde du devis (obligatoire pour ton DevisService)
     */
    public function save($devis)
    {
        $devis->save();
        return $devis;
    }

    /**
     * Récupération par ID
     */
    public function findById($id)
    {
        return Devis::findOrFail($id);
    }

    /**
     * Récupération des devis d’une conversation
     */
    public function getByConversation($conversationId)
    {
        return Devis::where('conversation_id', $conversationId)
            ->orderBy('created_at', 'desc')
            ->get();
    }

    /**
     * Mise à jour du statut
     */
    public function updateStatus($id, string $status)
    {
        $devis = Devis::findOrFail($id);
        $devis->update(['statut' => $status]);
        return $devis;
    }

    /**
     * Récupération des devis du client connecté
     */
    public function getByClientId($clientId)
    {
        return Devis::where('client_id', $clientId)
            ->orderBy('created_at', 'desc')
            ->get();
    }
}
