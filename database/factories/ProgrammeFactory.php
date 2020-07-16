<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Programme;
use Faker\Generator as Faker;

$factory->define(Programme::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'progCode' => $faker->randomNumber,
        'description' => $faker->sentence,
        'orgID' => factory(App\Organisation::class)
    ];
});
