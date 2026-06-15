<?php

namespace App\Notifications;

use App\Models\Devis;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDevisNotification extends Notification
{
    use Queueable;

    public $devis;

    public function __construct(Devis $devis)
    {
        $this->devis = $devis;
    }

    public function via($notifiable)
    {
        return ['database']; // ou ['mail', 'database'] si tu veux envoyer un email
    }

    public function toArray($notifiable)
    {
        return [
            'message' => "Un nouveau devis de {$this->devis->montant} € a été envoyé.",
            'devis_id' => $this->devis->id,
            'conversation_id' => $this->devis->conversation_id,
        ];
    }
}
