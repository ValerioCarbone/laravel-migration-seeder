<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++) {
            $new_train = new Train();
            $new_train->company = $faker->randomElement(['Italo', 'Trenitalia']);
            $new_train->departure_station = $faker->city();
            do {
                $new_train->arrival_station = $faker->city();
            } while ($new_train->departure_station = $new_train->arrival_station);
        }
    }
}
