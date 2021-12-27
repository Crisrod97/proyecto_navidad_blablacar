<?php

namespace Database\Factories;

use App\Models\Opinion;
use App\Models\Trayecto;
use App\Models\Pasajero;
use App\Models\Conductor;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpinionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opinion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'conductor_id'          => Conductor::all()->random()->id,
            'pasajero_id'           => Pasajero::all()->random()->id,
            'opinion'               => $this->faker->text(),
            'fecha'                 => $this->faker->dateTimeBetween('-20 year', '-1 day'),
        ];
    }
}
