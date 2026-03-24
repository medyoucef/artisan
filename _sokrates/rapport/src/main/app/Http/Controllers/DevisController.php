<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Devis;
use App\Models\MessagesUserArt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DevisController extends Controller
{
    public function create($conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        // Optionnel : vérifier que l'utilisateur est bien l'artisan de cette conversation
        if (Auth::id() !== $conversation->artisan->user_id) {
            abort(403, "Vous n'êtes pas l'artisan de cette conversation.");
        }

        return view('devis.create', compact('conversation'));
    }

    public function store(Request $request, $conversationId)
    {
        $conversation = Conversation::findOrFail($conversationId);

        if (Auth::id() !== $conversation->artisan->user_id) {
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

        // Message automatique dans le chat
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
            abort(403, "Vous n'êtes pas le client de ce devis.");
        }

        $devis->update(['statut' => 'accepté']);

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

    $devis = Devis::where('client_id', $clientId)
                  ->orderBy('created_at', 'desc')
                  ->get();

    return view('devis.client', compact('devis'));
}

    public function refuser($id)
    {
        $devis = Devis::findOrFail($id);

        if (Auth::id() !== $devis->client_id) {
            abort(403, "Vous n\'êtes pas le client de ce devis.");
        }

        $devis->update(['statut' => 'refusé']);

        MessagesUserArt::create([
            'conversation_id' => $devis->conversation_id,
            'sender_id'       => Auth::id(),
            'receiver_id'     => $devis->artisan_id,
            'message'         => "J'ai refusé votre devis de {$devis->montant} €.",
        ]);

        return back()->with('success', 'Devis refusé.');
    }
}

