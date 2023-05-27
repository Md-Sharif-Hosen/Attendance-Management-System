<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::truncate();
        Post::create([
            'post_title'=>'Manager'
        ]);
        Post::create([
            'post_title'=>'Web Designer'
        ]);
        Post::create([
            'post_title'=>'Web Devoloper'
        ]);
        Post::create([
            'post_title'=>'Digital Marketer'
        ]);
        Post::create([
            'post_title'=>'HR Head'
        ]);
    }
}
