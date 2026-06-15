<?php

namespace App\Http\Controllers;

use App\Application\Services\DevisService;
use App\Application\Services\ChatService;
use Illuminate\Http\Request;

class DevisController extends Controller
{
    private DevisService $service;
    private ChatService $chatService;

    public function __construct(DevisService $service, ChatService $chatService)
    {
        $this->service = $service;
        $this->chatService = $chatService;
    }

    /**
     * Affiche le formulaire de création d’un devis
     */
    public function create($conversationId)
    {
        // ✔ On récupère la conversation via le ChatService (pas Eloquent)
        $conversation = $this->chatService->getConversationData($conversationId)['conversation'];

        return view('devis.create', compact('conversation'));
    }

    /**
     * Enregistrement du devis
     */
    public function store(Request $request, $conversationId)
    {
        $request->validate([
            'montant' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $this->service->createDevis(
            $conversationId,
            $request->montant,
            $request->description
        );

        return redirect()->route('chat.show', $conversationId)
            ->with('success', 'Devis envoyé avec succès.');
    }

    /**
     * Acceptation du devis
     */
    public function accepter($id)
    {
        $this->service->acceptDevis($id);
        return back()->with('success', 'Devis accepté.');
    }

    /**
     * Refus du devis
     */
    public function refuser($id)
    {
        $this->service->refuseDevis($id);
        return back()->with('success', 'Devis refusé.');
    }

    /**
     * Liste des devis du client connecté
     */
    public function clientDevis()
    {
        $devis = $this->service->getClientDevis();
        return view('devis.client', compact('devis'));
    }
}
