<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Venta;
use Faker\Generator as Faker;

$factory->define(Venta::class, function (Faker $faker) {
    return [
        'qty' => $this->faker->text(40),
        'total' => $this->faker->int(10),
        'producto_id' => rand(1,100),
        'cliente_id' => rand(1,100),
    ];
});
