<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Unidade;
use Faker\Generator as Faker;

$factory->define(Unidade::class, function (Faker $faker) {
    return [
        'id_contrato' => $faker->randomDigit(1),
        'email' => $faker->email,
        'municipio' => $faker->city,
        'estado' => $faker->state(2),
        'tipo' => $faker->firstName(10),
        'status' => $faker-> randomDigitNotNull(1),
    ];
    factory(Unidade::class, 10)-> create ();
});
