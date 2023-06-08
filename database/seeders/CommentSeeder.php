<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::truncate();
        Comment::create([
            'message'=>'comment one',
            'post_id'=>2
        ]);
        Comment::create([
            'message'=>'comment two',
            'post_id'=>1
        ]);
        Comment::create([
            'message'=>'comment three',
            'post_id'=>2
        ]);
        Comment::create([
            'message'=>'comment four',
            'post_id'=>2
        ]);
        Comment::create([
            'message'=>'comment five',
            'post_id'=>3
        ]);
        Comment::create([
            'message'=>'comment six',
            'post_id'=>3
        ]);

         Comment::create([
            'message'=>'comment seven',
            'post_id'=>4
        ]);
        Comment::create([
            'message'=>'comment eight',
            'post_id'=>4
        ]);
        Comment::create([
            'message'=>'comment nine',
            'post_id'=>4
        ]);
    }
}
