<?php

namespace App\Application\Listeners;

use App\Events\DevisCreated;
use App\Notifications\NewDevisNotification;

class SendDevisNotification
{
    /**
     * Handle the event.
     */
    public function handle(DevisCreated $event)
    {
        $devis = $event->devis;

        // Récupération de l'artisan lié au devis
        $artisan = $devis->artisan;

        // Vérification de sécurité : artisan ou user manquant
        if (!$artisan || !$artisan->user) {
            return;
        }

        // Envoi de la notification
        $artisan->user->notify(new NewDevisNotification($devis));
    }
}
