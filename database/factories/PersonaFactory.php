<?php

namespace Database\Factories;

use App\Models\Persona;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Persona::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'fecha_afiliacion' => $this->faker->date($format = 'Y-m-d',$max = 'now'),
            'fecha_ingreso' => $this->faker->date($format = 'Y-m-d',$max = 'now'),
            'fecha_actualizacion' => $this->faker->date($format = 'Y-m-d',$max = 'now'),
            'cedula' => $this->faker->unique()->numerify('###-######-####Q'),
            'inss' => $this->faker->unique()->numerify('#######-#'),
            'correo' => $this->faker->freeEmail(),
            'nombre' => $this->faker->name($gender = null),
            'facultad' => $this->faker->word(),
            'departamento' => $this->faker->word(),
            'direccion' => $this->faker->address(),
            'cel_tigo' => $this->faker->phoneNumber(),
            'cel_claro' => $this->faker->phoneNumber(),
            'cel_casa' => $this->faker->phoneNumber(),
            'cel_trabajo' => $this->faker->phoneNumber(),
            'estado_civil' => $this->faker->word(),
            'nombre_conyugue' => $this->faker->name($gender = null),
            'madre' => $this->faker->name($gender = 'female'),
            'padre' => $this->faker->name($gender = 'male'),
            'm_fallecida' => $this->faker->boolean(),
            'p_fallecido' => $this->faker->boolean(),
            'c_fallecido' => $this->faker->boolean()
        ];
    }
}
