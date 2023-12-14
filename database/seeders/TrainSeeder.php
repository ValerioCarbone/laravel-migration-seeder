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
            } while ($new_train->departure_station == $new_train->arrival_station);
            $new_train->departure_date_time = $faker->dateTimeBetween('-10 week', '+20 week');
            $new_train->arrival_date_time = $faker->dateTimeBetween('-10 week', '+20 week');
            // $new_train->arrival_date_time = $faker->dateTimeBetween($new_train->departure_date_time, '+1 day');
            $new_train->train_id = $faker->numerify('####');
            $new_train->number_of_carriages = $faker->numberBetween(4, 20);
            // if ($new_train->departure_date_time)
            // $new_train->on_time = $faker->randomElement([false, true]);
            $new_train->save();
        }
    }
}
