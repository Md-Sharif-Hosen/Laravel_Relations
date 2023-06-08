<?php

namespace Database\Seeders;

use App\Models\Mechanic;
use Illuminate\Database\Seeder;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mechanic::truncate();
        Mechanic::create([
            'name'=>'Mr.Mofiz'
        ]);
        Mechanic::create([
            'name'=>'Mr.Kasem'
        ]);
        Mechanic::create([
            'name'=>'Mr.Abul'
        ]);
    }
}
