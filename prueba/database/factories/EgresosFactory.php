<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Egresos;
use Faker\Generator as Faker;

$factory->define(Egresos::class, function (Faker $faker) {
    return [
            'codigo' => $faker->swiftBicNumber,
            'descripcion' => $faker->realText($maxNbChars = 100),
            'egresos' => $faker->numberBetween($min = 0, $max = 9000000),
    ];
});
