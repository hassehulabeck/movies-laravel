<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->regexify('[A-Z a-z]{8,20}'),
        'year' => $faker->year()
    ];
});
