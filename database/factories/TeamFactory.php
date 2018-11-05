<?php

use Faker\Generator as Faker;

$factory->define(App\Team::class, function (Faker $faker) {
    return [
      'name' => $faker->state,
      'email' => $faker->unique()->safeEmail,
      'adress' => $faker->streetAddress,
      'city' => $faker->city,
    ];
});
