<?php
namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Director;
use Illuminate\Database\Eloquent\Factories\Factory;

//$factory->define(Movie::class, function (Faker $faker) {
//
//    $titles = [
//        "Heat", "Tystnaden", "Den ofrivillige golfaren", "A streetcar named Desire",
//        "Das Boot", "Das Boot II - Bluescreen", "E.T.", "It", "Them", "Frozen", "Frozen II",
//        "Hets", "De 12 apornas armé", "Moneyball"
//    ];
//
//    return [
//        'title' => $faker->unique()->randomElement($titles),
//        'year' => $faker->year(),
//        'director_id' => Director::all()->random()->id,
//    ];
//});

class MovieFactory extends Factory
{
    public function definition()
    {
        $titles = [
            "Heat", "Tystnaden", "Den ofrivillige golfaren", "A streetcar named Desire",
            "Das Boot", "Das Boot II - Bluescreen", "E.T.", "It", "Them", "Frozen", "Frozen II",
            "Hets", "De 12 apornas armé", "Moneyball"
        ];

        return [
            'title' => $this->faker->unique()->randomElement($titles),
            'year' => $this->faker->year(),
            'director_id' => Director::all()->random()->id,
        ];
    }
}
