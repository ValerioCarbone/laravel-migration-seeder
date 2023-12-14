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
            $departure = $faker->dateTimeBetween('-1 week', '+1 week');
            $arrival = $faker->dateTimeBetween($departure, '+1 day');
            $new_train->departure_date_time = $departure;
            $new_train->arrival_date_time = $arrival;
            $new_train->train_id = $faker->numerify('####');
            $new_train->number_of_carriages = $faker->numberBetween(4, 20);
            $on_time = $faker->randomElement([false, true]);
            $new_train->on_time = $on_time;
            if ($on_time == true) {
                $new_train->cancelled == false;
                $new_train->delay = null;
            } else {
                $new_train->cancelled = $faker->randomElement([false, true]);
            }
            if ($new_train->cancelled == false) {
                $new_train->delay = $faker->numberBetween(4, 200);
            }
            $new_train->save();
        }
    }
}
