<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Cars;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Car::truncate();
        Car::create([
            'model' => 'Auddi',
            'mechanic_id' => 1
        ]);
        Car::create([
            'model' => 'BMW',
            'mechanic_id' => 2
        ]);
        Car::create([
            'model' => 'Range Rover',
            'mechanic_id' => 3
        ]);
    }
}
