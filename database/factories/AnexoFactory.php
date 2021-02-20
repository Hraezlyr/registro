<?php

namespace Database\Factories;

use App\Models\Anexo;
use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnexoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Anexo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'partida_afiliado' => $this->faker->boolean(),
            'partida_hijo' => $this->faker->boolean(),
            'partida_padres' => $this->faker->boolean(),
            'acta_matrimonio' => $this->faker->boolean(),
            'declaracion_notariada' => $this->faker->boolean(),
            'observaciones' => $this->faker->boolean()
        ];
    }
}
