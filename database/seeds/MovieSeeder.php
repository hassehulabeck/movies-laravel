<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Movie::class, 10)->create()->each(function ($movie) {
            $slumptal = mt_rand(1, 5);
            $movie->actors()->attach(App\Actor::all()->random($slumptal));
        });
    }
}
