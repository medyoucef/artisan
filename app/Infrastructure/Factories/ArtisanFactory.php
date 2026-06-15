<?php

namespace App\Infrastructure\Factories;

use App\Models\Artisan;

class ArtisanFactory implements FactoryInterface
{
    public function create(array $data)
    {
        return new Artisan([
            'nom' => $data['nom'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'profession_id' => $data['profession_id'],
            'ville' => $data['ville'],
        ]);
    }
}
