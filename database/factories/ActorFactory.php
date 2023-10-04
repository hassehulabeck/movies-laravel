<?php
namespace Database\Factories;
///** @var Factory $factory */

use Illuminate\Database\Eloquent\Factories\Factory;

class ActorFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'birthday' => $this->faker->dateTimeBetween($startDate = '-80 years', $endDate = '-20 years', $timezone = null),
            'country' => $this->faker->country
        ];
    }
}

//$factory->define(Actor::class, function (Faker $faker) {
//    return [
//        'name' => $faker->name,
//        'birthday' => $faker->dateTimeBetween($startDate = '-80 years', $endDate = '-20 years', $timezone = null),
//        'country' => $faker->country
//    ];
//});
