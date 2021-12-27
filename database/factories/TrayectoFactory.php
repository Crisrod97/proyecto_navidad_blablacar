<?php

namespace Database\Factories;

use App\Models\Trayecto;
use App\Models\Pasajero;
use App\Models\Conductor;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrayectoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Trayecto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codigo'                => $this->faker->iban(10),
            'origen'                => $this->faker->state(),
            'destino'               => $this->faker->state(),
            'fecha'                 => $this->faker->dateTimeBetween('-20 year', '-1 day'),
            'hora'                  => $this->faker->time(),
            'conductor_id'          => Conductor::all()->random()->id,
            'pasajero_id'           => Pasajero::all()->random()->id,

        ];
    }
}
