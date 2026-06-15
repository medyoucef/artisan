<?php

namespace App\Application\Services;

use App\Domain\Interfaces\DevisRepositoryInterface;
use App\Domain\Interfaces\ConversationRepositoryInterface;
use App\Domain\Interfaces\MessageRepositoryInterface;
use App\Infrastructure\Factories\DevisFactory;
use App\Infrastructure\Factories\MessageFactory;
use App\Domain\Events\DevisCreated;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DevisService
{
    private $devisRepo;
    private $conversationRepo;
    private $messageRepo;
    private $devisFactory;
    private $messageFactory;

    public function __construct(
        DevisRepositoryInterface $devisRepo,
        ConversationRepositoryInterface $conversationRepo,
        MessageRepositoryInterface $messageRepo,
        DevisFactory $devisFactory,
        MessageFactory $messageFactory
    ) {
        $this->devisRepo = $devisRepo;
        $this->conversationRepo = $conversationRepo;
        $this->messageRepo = $messageRepo;
        $this->devisFactory = $devisFactory;
        $this->messageFactory = $messageFactory;
    }

    /**
     * Création d’un devis
     */
    public function createDevis($conversationId, $montant, $description)
    {
        $conversation = $this->conversationRepo->findById($conversationId);

        // Vérification : seul l’artisan peut envoyer un devis
        if (Auth::id() !== $conversation->artisan->user_id) {
            Log::warning("Tentative non autorisée de création de devis");
            abort(403);
        }

        // Création via Factory Method
        $devis = $this->devisFactory->create([
            'conversation_id' => $conversationId,
            'artisan_id'      => $conversation->artisan_id,
            'client_id'       => $conversation->user_id,
            'montant'         => $montant,
            'description'     => $description,
            'statut'          => 'en_attente',
        ]);

        // Sauvegarde via Repository
        $this->devisRepo->save($devis);

        // Déclenchement de l’événement
        event(new DevisCreated($devis));

        // Déterminer le receiver du message automatique
        $receiverId = $conversation->user_id;

        // Message automatique
        $message = $this->messageFactory->create([
            'conversation_id' => $conversationId,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $receiverId,
            'message'         => "J'ai envoyé un devis de {$montant} €.",
            'type'            => 'system',
        ]);

        $this->messageRepo->save($message);

        return $devis;
    }

    /**
     * Acceptation du devis
     */
    public function acceptDevis($id)
    {
        $devis = $this->devisRepo->findById($id);

        if (Auth::id() !== $devis->client_id) {
            abort(403);
        }

        $this->devisRepo->updateStatus($id, 'accepté');

        // Message automatique
        $message = $this->messageFactory->create([
            'conversation_id' => $devis->conversation_id,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $devis->artisan->user_id,
            'message'         => "J'ai accepté votre devis de {$devis->montant} €.",
            'type'            => 'system',
        ]);

        $this->messageRepo->save($message);

        return $devis;
    }

    /**
     * Refus du devis
     */
    public function refuseDevis($id)
    {
        $devis = $this->devisRepo->findById($id);

        if (Auth::id() !== $devis->client_id) {
            abort(403);
        }

        $this->devisRepo->updateStatus($id, 'refusé');

        // Message automatique
        $message = $this->messageFactory->create([
            'conversation_id' => $devis->conversation_id,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $devis->artisan->user_id,
            'message'         => "J'ai refusé votre devis de {$devis->montant} €.",
            'type'            => 'system',
        ]);

        $this->messageRepo->save($message);

        return $devis;
    }

    /**
     * Liste des devis du client connecté
     */
    public function getClientDevis()
    {
        return $this->devisRepo->getByClientId(Auth::id());
    }
}
