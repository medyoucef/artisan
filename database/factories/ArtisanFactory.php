<?php

namespace Database\Factories;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtisanFactory extends Factory
{
    protected $model = Artisan::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'profession' => 'Plombier',
            'ville' => 'Montreal',
            'adresse' => $this->faker->address(),
        ];
    }
}
