<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Ingresos;
use Faker\Generator as Faker;

$factory->define(Ingresos::class, function (Faker $faker) {
    return [
            'codigo' => $faker->swiftBicNumber,
            'descripcion' => $faker->realText($maxNbChars = 100),
            'ingresos' => $faker->numberBetween($min = 0, $max = 9000000),
    ];
});
