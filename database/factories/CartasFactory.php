<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Carta;
use App\Restaurante;
use Faker\Generator as Faker;

$factory->define(Carta::class, function (Faker $faker) {

    $restaurantes = Restaurante::all()->pluck('id');


    //dd($faker->randomElements($restaurantes));
    return [
        'nombre' => $faker->sentence(2),
        'from' => date('Y-m-d'),
        'to' => '2021-12-31',
        'activo' => 1,
        'restaurante_id' => $faker->randomElement($restaurantes)
    ];
});
