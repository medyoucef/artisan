<?php

namespace App\Services;

class NotificationService
{
    public function formatMessage(string $message, string $type = 'info'): string
    {
        return strtoupper($type) . ': ' . trim($message);
    }

    public function notifyArtisan($artisan, string $message): array
    {
        return [
            'recipient' => $artisan->nom,
            'message' => $this->formatMessage($message, 'artisan'),
        ];
    }

    public function notifyClient($client, string $message): array
    {
        return [
            'recipient' => $client->name,
            'message' => $this->formatMessage($message, 'client'),
        ];
    }
}
