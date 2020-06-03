<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {

    $titles = [
        "Heat", "Tystnaden", "Den ofrivillige golfaren", "A streetcar named Desire",
        "Das Boot", "Das Boot II - Bluescreen", "E.T.", "It", "Them", "Frozen", "Frozen II",
        "Hets", "De 12 apornas armé", "Moneyball"
    ];

    return [
        'title' => $faker->unique()->randomElement($titles),
        'year' => $faker->year()
    ];
});
