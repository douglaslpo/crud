<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'cpf' => $faker->randomNumber(10),
        'nome_fantasia' => $faker->integer(2),
        'id_contrato' => $faker->randomDigitNotNull(),
        
    ];
    factory(Usuario::class, 10)-> create ();
}
);
