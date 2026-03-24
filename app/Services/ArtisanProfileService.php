<?php

namespace App\Services;

use App\Models\Artisan;

class ArtisanProfileService
{
    public function normalizeData(array $data): array
    {
        return [
            'nom'        => ucfirst(trim($data['nom'] ?? '')),
            'ville'      => ucfirst(trim($data['ville'] ?? '')),
            'adresse'    => trim($data['adresse'] ?? ''),
            'facebook'   => trim($data['facebook'] ?? ''),
            'instagram'  => trim($data['instagram'] ?? ''),
            'whatsapp'   => trim($data['whatsapp'] ?? ''),
        ];
    }

    public function isProfileComplete(Artisan $artisan): bool
    {
        return !empty($artisan->nom)
            && !empty($artisan->ville)
            && !empty($artisan->adresse);
    }

    public function getProfileSummary(Artisan $artisan): string
    {
        return "{$artisan->nom} — {$artisan->profession} ({$artisan->ville})";
    }
}
