<?php

namespace Database\Factories;

use App\Models\Artisan;
use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtisanFactory extends Factory
{
    protected $model = Artisan::class;

    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'profession' => Profession::factory(),
            'ville' => 'Montreal',
            'adresse' => $this->faker->address(),
        ];
    }
}
