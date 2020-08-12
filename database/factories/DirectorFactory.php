<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Director;
use Faker\Generator as Faker;

$factory->define(Director::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'birthday' => $faker->dateTimeBetween($startDate = '-110 years', $endDate = '-25 years', $timezone = null),
    ];
});
