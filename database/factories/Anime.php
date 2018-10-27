<?php

use Faker\Generator as Faker;

$factory->define(App\Anime::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'image' => $faker->imageUrl(640, 480),
        'year' => $faker->year,
        'gender' => 'action drama ecchi',
    ];
});
