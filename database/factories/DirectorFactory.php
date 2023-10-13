<?php
namespace Database\Factories;
///** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Database\Eloquent\Factories\Factory;

//use Faker\Factory;

//$factory->define(Director::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name(),
//        'birthday' => $faker->dateTimeBetween($startDate = '-110 years', $endDate = '-25 years', $timezone = null),
//    ];
//});
class DirectorFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'birthday' => $this->faker->dateTimeBetween($startDate = '-110 years', $endDate = '-25 years', $timezone = null),
        ];
    }
}
