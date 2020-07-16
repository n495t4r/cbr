<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Organisation;
use Faker\Generator as Faker;

$factory->define(Organisation::class, function (Faker $faker) {
    return [
            'name' => $faker->company,
            'description' => $faker->sentence,
            'orgCode' => $faker->randomNumber
    ];
});
