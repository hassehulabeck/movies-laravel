<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'birthday' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = '-20 years', $timezone = null),
        'country' => $faker->country
    ];
});
