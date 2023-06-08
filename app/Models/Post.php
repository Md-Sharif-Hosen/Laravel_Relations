<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function Comments()
    {
        //function_body

        return $this->hasMany(Comment::class);
    }
    public function categorys()
    {
        //function_body
        return $this->belongsToMany(Category::class);
    }
}
