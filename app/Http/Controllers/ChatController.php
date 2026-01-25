<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\MessagesUserArt;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function startConversation($artisanId)
    {
        $userId = Auth::id();

        $conversation = Conversation::where('user_id', $userId)
            ->where('artisan_id', $artisanId)
            ->first();

        if (!$conversation) {
            $conversation = Conversation::create([
                'user_id' => $userId,
                'artisan_id' => $artisanId,
            ]);
        }

        return redirect()->route('chat.show', $conversation->id);
    }

    public function show($id)
    {
        $conversation = Conversation::findOrFail($id);

        $messages = MessagesUserArt::where('conversation_id', $id)
            ->orderBy('created_at')
            ->get();

        return view('chat.show', compact('conversation', 'messages'));
    }


    public function inbox()
{
    $userId = Auth::id();

    // Trouver l'artisan lié à ce user
    $artisan = Artisan::where('user_id', $userId)->first();

    if (!$artisan) {
        abort(403, "Vous n'êtes pas un artisan.");
    }

    // Récupérer toutes les conversations de cet artisan
    $conversations = Conversation::where('artisan_id', $artisan->id)
        ->with(['user'])
        ->get();

    return view('chat.inbox', compact('conversations'));
}

    public function send(Request $request, $id)
    {
        $request->validate([
            'message' => 'required|string',
        ]);

        $conversation = Conversation::findOrFail($id);

        $senderId = Auth::id();

        // Déterminer le destinataire
        $receiverId = $senderId == $conversation->user_id
                ? $conversation->artisan->user_id
                : $conversation->user_id;


        MessagesUserArt::create([
            'conversation_id' => $id,
            'sender_id' => $senderId,
            'receiver_id' => $receiverId,
            'message' => $request->message,
        ]);

        return back();
    }
}
