<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Atestado;
use Faker\Generator as Faker;

$factory->define(Atestado::class, function (Faker $faker) {
    return [
        'id_contrato' => $faker->randomDigitNotNull(1),
        'id_unidade' => $faker->randomDigitNotNull(1),
        'id_usuario' => $faker->randomDigitNotNull(1),
        'acompanhante' => $faker->firstName(32),
        'obito' => $faker-> userName
    ];
    factory(Atestado::class, 10)-> create ();
});
