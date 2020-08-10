<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contrato as Contrato;
use Faker\Generator as Faker;

$factory->define(Contrato::class, function (Faker $faker) {
    return [
        'cnpj' => $faker->randomNumber(9),
        'nome_fantasia' => $faker->name,
        'nome_fantasia' => $faker->name,
        'razao_social' => $faker->name,
        'email' => $faker->email,
        'status' => $faker->randomDigitNotNull(1)
    ];
    factory(Contrato::class, 10)-> create ();
});
