<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'code_customer' => $faker->unique()->randomNumber,
        'name' => $faker->name,
        'email' => $faker->email,
        'Country' => $faker->country,
        'City' => $faker->city,
        'address' => $faker->email,
        'Contact_number' => $faker->e164PhoneNumber ,
    ];
});

