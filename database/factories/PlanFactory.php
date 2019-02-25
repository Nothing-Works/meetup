<?php

use Faker\Generator as Faker;

$factory->define(App\Plan::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'cost' => $faker->numberBetween($min = 20, $max = 500),
        'storage' => $faker->numberBetween($min = 20, $max = 500),
        'domains' => $faker->numberBetween($min = 25, $max = 100),
        'bandWidth' => $faker->numberBetween($min = 1, $max = 5),
        'emails' => $faker->numberBetween($min = 2000, $max = 5000),
    ];
});
