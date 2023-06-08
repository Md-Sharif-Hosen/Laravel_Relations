<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Mechanic;
use App\Models\phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class Phonecontroller extends Controller
{
    //
    public function view()
    {
        //function_body
        $phones=phone::get();
        // return $user;

        // $users=User::get();
        return view('one_to_one',compact('phones'));



    }
    public function reply()
    {

              $post=Post::all();
              $comment=Comment::all();
           return view('one_to_many',compact('comment'));
    }

    public function category()
    {
        //function_body
        $posts=Post::with('categorys')->get();
        $category=Category::with('post')->get();
        // @dd($posts);
        return view('many_to_many',compact('category'));
    }
    public function car()
    {
        //function_body
        $mechanics=Mechanic::with('Carowners')->get();
        // @dd($mechanics);
        return view('hasOnethrough',compact('mechanics'));
    }
}
