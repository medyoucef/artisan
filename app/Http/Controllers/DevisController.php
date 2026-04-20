<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Devis;
use App\Models\MessagesUserArt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DevisController extends Controller
{
    public function create($conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        if (Auth::id() !== $conversation->artisan->user_id) {
            Log::warning('Accès refusé à la création de devis', [
                'conversation_id' => $conversationId,
                'user_id' => Auth::id(),
            ]);

            abort(403, "Vous n'êtes pas l'artisan de cette conversation.");
        }

        Log::info('Accès à la page de création de devis', [
            'conversation_id' => $conversationId,
            'artisan_id' => Auth::id(),
        ]);

        return view('devis.create', compact('conversation'));
    }

    public function store(Request $request, $conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        if (Auth::id() !== $conversation->artisan->user_id) {
            Log::warning('Tentative non autorisée de création de devis', [
                'conversation_id' => $conversationId,
                'user_id' => Auth::id(),
            ]);

            abort(403, "Vous n'êtes pas l'artisan de cette conversation.");
        }

        $request->validate([
            'montant' => 'required|numeric',
            'description' => 'required|string',
        ]);

        $devis = Devis::create([
            'conversation_id' => $conversationId,
            'artisan_id'      => Auth::id(),
            'client_id'       => $conversation->user_id,
            'montant'         => $request->montant,
            'description'     => $request->description,
            'statut'          => 'en_attente',
        ]);

        Log::info('Devis créé', [
            'devis_id' => $devis->id,
            'artisan_id' => Auth::id(),
            'client_id' => $conversation->user_id,
            'montant' => $request->montant,
        ]);

        MessagesUserArt::create([
            'conversation_id' => $conversationId,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $conversation->user_id,
            'message'         => "J'ai envoyé un devis de {$devis->montant} €.",
        ]);

        return redirect()->route('chat.show', $conversationId)
                         ->with('success', 'Devis envoyé avec succès.');
    }

    public function accepter($id)
    {
        $devis = Devis::findOrFail($id);

        if (Auth::id() !== $devis->client_id) {
            Log::warning('Tentative non autorisée d’acceptation de devis', [
                'devis_id' => $id,
                'user_id' => Auth::id(),
            ]);

            abort(403, "Vous n'êtes pas le client de ce devis.");
        }

        $devis->update(['statut' => 'accepté']);

        Log::info('Devis accepté', [
            'devis_id' => $devis->id,
            'client_id' => Auth::id(),
        ]);

        MessagesUserArt::create([
            'conversation_id' => $devis->conversation_id,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $devis->artisan_id,
            'message'         => "J'ai accepté votre devis de {$devis->montant} €.",
        ]);

        return back()->with('success', 'Devis accepté.');
    }

    public function clientDevis()
    {
        $clientId = Auth::id();

        Log::info('Consultation des devis client', [
            'client_id' => $clientId,
        ]);

        $devis = Devis::where('client_id', $clientId)
                      ->orderBy('created_at', 'desc')
                      ->get();

        return view('devis.client', compact('devis'));
    }

    public function refuser($id)
    {
        $devis = Devis::findOrFail($id);

        if (Auth::id() !== $devis->client_id) {
            Log::warning('Tentative non autorisée de refus de devis', [
                'devis_id' => $id,
                'user_id' => Auth::id(),
            ]);

            abort(403, "Vous n'êtes pas le client de ce devis.");
        }

        $devis->update(['statut' => 'refusé']);

        Log::info('Devis refusé', [
            'devis_id' => $devis->id,
            'client_id' => Auth::id(),
        ]);

        MessagesUserArt::create([
            'conversation_id' => $devis->conversation_id,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $devis->artisan_id,
            'message'         => "J'ai refusé votre devis de {$devis->montant} €.",
        ]);

        return back()->with('success', 'Devis refusé.');
    }
}
