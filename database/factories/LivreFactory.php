<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;

class LivreFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Livre::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre'=>$this->faker->sentence,
            'auteur'=>$this->faker->sentence,
            'resume'=>$this->faker->text,
            'isbn'=>$this->faker->randomNumber($nbDigits = NULL, $strict = false),
            'prix'=>$this->faker->sentence,
            'editeur'=>$this->faker->sentence,
        ];
    }
}
