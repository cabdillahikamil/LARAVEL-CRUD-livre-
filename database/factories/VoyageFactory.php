<?php

namespace Database\Factories;

use App\Models\Voyage;
use Illuminate\Database\Eloquent\Factories\Factory;

class VoyageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Voyage::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client'=>$this->faker->sentence,
            'ville'=>$this->faker->sentence,
            'reservation'=>$this->faker->sentence,
            'paiement'=>$this->faker->sentence,
        ];
    }
}
