<?php

namespace Database\Factories;

use App\Models\Pasajero;
use Illuminate\Database\Eloquent\Factories\Factory;

class PasajeroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasajero::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'            => $this->faker->name(),
            'apellidos'         => $this->faker->lastname(),
            'f_nacimiento'      => $this->faker->dateTimeBetween('-90 year', '-18 year'),
            'email'             => $this->faker->email(),
            'dni'               => $this->faker->dni,
            'telefono'          => $this->faker->tollFreeNumber(),
            'created_at'        => $this->faker->dateTimeBetween('now'),

        ];
    }
}
