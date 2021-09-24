<?php

namespace Database\Factories;

use App\Models\Avion;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Avion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=>$this->faker->sentence,
            'constructeur'=>$this->faker->sentence,
            'capacité'=>$this->faker->sentence,
            'kilometrage'=>$this->faker->sentence,
        ];
    }
}
