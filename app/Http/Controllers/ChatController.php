<?php

namespace App\Http\Controllers;

use App\Application\Services\ChatService;
use App\Models\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    private ChatService $service;

    public function __construct(ChatService $service)
    {
        $this->service = $service;
    }

    public function startConversation($artisanId)
    {
        $conversation = $this->service->startConversation($artisanId);
        return redirect()->route('chat.show', $conversation->id);
    }

    public function show($id)
    {
        // Récupération des données
        $data = $this->service->getConversationData($id);
    
        // Marquer les messages comme lus
        \App\Models\MessagesUserArt::where('conversation_id', $id)
            ->where('receiver_id', Auth::id())
            ->whereNull('read_at')
            ->update(['read_at' => now()]);
    
        return view('chat.show', $data);
    }
    

    public function inbox()
    {
        $artisan = Artisan::where('user_id', Auth::id())->firstOrFail();
        $conversations = $this->service->getInbox($artisan->id);

        return view('chat.inbox', compact('conversations'));
    }

    public function send(Request $request, $id)
    {
        $request->validate(['message' => 'required|string']);
        $this->service->sendMessage($id, $request->message);

        return back();
    }
}
