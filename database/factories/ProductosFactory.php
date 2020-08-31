<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use App\Carta;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {

    $cartas = carta::all()->pluck('id');

    return [

            'nombre' => $faker->sentence(3),
            'descripcion' => $faker->sentence(20),
            'img' => 1,
            'activo' => 1,
            'carta_id' => $faker->randomElement($cartas),
    ];
});
