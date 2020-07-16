<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Beneficiary;
use Faker\Generator as Faker;

$factory->define(Beneficiary::class, function (Faker $faker) {

    $gender = $faker->randomElement(['Male', 'Female']);

    return [
        'first_name'=> $faker->firstName($gender),
        'middle_name' => $faker->randomElement([' ', $faker->firstName($gender)]),
        'last_name'=> $faker->lastName,
        'phone' => $faker->unique()->e164PhoneNumber,
        'gender' => $gender,
        'dob'  => $faker->date,
        'address' => $faker->address,
        'state'  => $faker->state,
        'lga' => $faker->city,
        'marital_status' => $faker->randomElement(['Married', 'Single']),
        'progID'=> factory(App\Programme::class),

        'alt_phone' => $faker->randomElement([' ', $faker->e164PhoneNumber]),
        'email' => $faker->unique()->safeEmail,
        'occupation' => $faker->randomElement(['Trader', 'Public Servant', 'Civil Servant']),
        'tpid'=> $faker->randomNumber,
        'bank_name'=> $faker->randomElement(['Zenith bank', 'Unity bank', 'Access bank', 'GT bank']),
        'acct_number'=> $faker->isbn10,
        'bvn'=> $faker->isbn10.'3',
        'id_type'=> $faker->randomElement(['Intl passport', 'Driver\'s License', 'Voter\'s card']),
        'id_number'=> $faker->unique()->randomNumber,
        'nok_fullname'=> $faker->firstName.' '.$faker->lastName,
        'nok_relationship'=>  $faker->randomElement(['Sibling', 'Cousin', 'Friend']),
        'nok_address'=> $faker->address,
        'nok_phone' => $faker->e164PhoneNumber
    ];
});
