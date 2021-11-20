<?php

use Illuminate\Database\Seeder;
use App\Travels;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100;$i++){
            $newTravels = new Travels();
            $newTravels->code = $faker->isbn10();
            $newTravels -> city = $faker -> city();
            $newTravels -> transport = $faker -> word();
            $newTravels -> days = $faker-> numberBetween(2,30);
            $newTravels->description = $faker->paragraph(4);
            $newTravels->price = $faker->randomFloat(2, 100, 500);
            $newTravels->save();
        }

    }
}
