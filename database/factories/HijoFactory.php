<?php

namespace Database\Factories;

use App\Models\Hijo;
use Illuminate\Database\Eloquent\Factories\Factory;

class HijoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hijo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre_hijo' => $this->faker->name($gender = null),
            'sexo' => $this->faker->randomElement($array = array ('masculino','femenino')),
            'edad' => $this->faker->randomDigit()
        ];
    }
}
