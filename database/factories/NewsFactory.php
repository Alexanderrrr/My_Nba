<?php

use Faker\Generator as Faker;
use App\News;

$factory->define(News::class, function (Faker $faker) {
    return [
      'title' => $faker->sentences(1, true),
      'content' => $faker->realText(700),
    ];
});
