<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Productos;
use Faker\Generator as Faker;

$factory->define(Productos::class, function (Faker $faker) {
    return [
        'nombre' => $this->faker->text(40),
        'cantidad' => $this->faker->int(10),
        'descripcion' => $this->faker->text(800),
        'precio' => $this->faker->int(5),
        'imagen' => $this->faker->imageUrl(1280,720)
        'date' =>$this->faker->datetime(),
        'categoria_id' => rand(1,100),
        'usuario_id' => rand(1,100),
        'cliente_id' => rand(1,100),
        'venta_id' => rand(1,100),
    ];
});
