<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'nombre' => $this->faker->text(40),
        'direccion' => $this->faker->text(40),
        'telefono' => $this->faker->int(11),
        'status' => $this->faker->text(10),
        'tipo' => $this->faker->text(10),
    ];
});
