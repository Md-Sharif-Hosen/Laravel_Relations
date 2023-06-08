<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\Owners;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Owner::truncate();
        Owner::create([
            'name'=>'Khaleda Zia',
            'car_id'=>1
        ]);
        Owner::create([
            'name'=>'Sheikh Hasina',
            'car_id'=>2
        ]);
        Owner::create([
            'name'=>'Gm Kader',
            'car_id'=>3
        ]);
    }
}
