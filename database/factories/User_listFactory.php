<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User_list;
use Faker\Generator as Faker;

$factory->define(User_list::class, function (Faker $faker) {
    return [
        'UId' => Rand(1, 1000),
        'UName' => $faker->name,
        'UPhone' => $faker->phoneNumber,
        'UAddress' => $faker->address,
    ];
});
