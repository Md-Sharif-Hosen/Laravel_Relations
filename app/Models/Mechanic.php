<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;
    public function Carowners()
    {
        //function_body
        return $this->hasOneThrough(Owner::class, Car::class);
    }

    public function car()
    {
        //function_body
        return $this->hasOne(Car::class);
    }
}
