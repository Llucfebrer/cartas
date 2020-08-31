<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurante;
use Faker\Generator as Faker;

$factory->define(Restaurante::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name(),
        'direccion' => $faker->address(),
        'descripcion' => $faker->sentence(30),
        'active' => 1
    ];
});
