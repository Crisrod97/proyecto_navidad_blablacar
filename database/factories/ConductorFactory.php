<?php

namespace Database\Factories;

use App\Models\Conductor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConductorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Conductor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $this->faker->addProvider(new \Faker\Provider\Fakecar($this->faker));
        $v = $this->faker->vehicleArray();
        return [
            'nombre'            => $this->faker->name(),
            'apellidos'         => $this->faker->lastname(),
            'f_nacimiento'      => $this->faker->dateTimeBetween('-65 year', '-18 year'),
            'email'             => $this->faker->email(),
            'dni'               => $this->faker->dni,
            'telefono'          => $this->faker->tollFreeNumber(),
            'modelo_coche'      => $v['brand'],
        ];
    }
}
