<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Monitor;
use Faker\Generator as Faker;

$factory->define(Monitor::class, function (Faker $faker) {
    return [
        //
        'first_name' => $faker->firstName,
        'middle_name'=> $faker->firstName,
        'last_name' => $faker->lastName,
        'gender' => $faker->null|'male'|'female',
        'phone' => $faker->unique()->e164PhoneNumber,
        'email' => $faker->unique()->freeEmail,
        'dob' => $faker->date,
        'registered_at' => now(),
        'password' => $faker->password
    ];
});
