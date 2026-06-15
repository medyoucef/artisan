<?php

namespace App\Application\Services;

use App\Domain\Interfaces\ConversationRepositoryInterface;
use App\Domain\Interfaces\MessageRepositoryInterface;
use App\Domain\Interfaces\DevisRepositoryInterface;
use App\Infrastructure\Factories\MessageFactory;
use Illuminate\Support\Facades\Auth;

class ChatService
{
    private $conversations;
    private $messages;
    private $devis;
    private $messageFactory;

    public function __construct(
        ConversationRepositoryInterface $conversations,
        MessageRepositoryInterface $messages,
        DevisRepositoryInterface $devis,
        MessageFactory $messageFactory
    ) {
        $this->conversations = $conversations;
        $this->messages = $messages;
        $this->devis = $devis;
        $this->messageFactory = $messageFactory;
    }

    public function startConversation($artisanId)
    {
        $userId = Auth::id();

        $conversation = $this->conversations->findBetween($userId, $artisanId);

        if (!$conversation) {
            $conversation = $this->conversations->create($userId, $artisanId);
        }

        return $conversation;
    }

    public function getConversationData($id)
    {
        return [
            'conversation' => $this->conversations->findById($id),
            'messages'     => $this->messages->getByConversation($id),
            'devis'        => $this->devis->getByConversation($id),
        ];
    }

    public function sendMessage($conversationId, $message)
    {
        $conversation = $this->conversations->findById($conversationId);
        $senderId = Auth::id();

        // Déterminer le receiver
        $receiverId = $senderId == $conversation->user_id
            ? $conversation->artisan->user_id
            : $conversation->user_id;

        // Création via Factory Method
        $msg = $this->messageFactory->create([
            'conversation_id' => $conversationId,
            'sender_id'       => $senderId,
            'receiver_id'     => $receiverId,   // ✔ OBLIGATOIRE
            'message'         => $message,      // ✔ cohérent avec ta table
            'type'            => 'texte',
        ]);

        return $this->messages->save($msg);
    }

    public function getInbox($artisanId)
    {
        return $this->conversations->getForArtisan($artisanId);
    }
}
