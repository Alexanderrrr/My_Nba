<?php

use Faker\Generator as Faker;

$factory->define(App\Player::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName($gender = 'male'),
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
    ];
});
