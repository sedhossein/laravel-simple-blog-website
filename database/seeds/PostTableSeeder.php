<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Post::class,30)
            ->create()
            ->each( function ($post){
                $post->tags()
                    ->saveMany( factory(\App\Tag::class,5)->make() );
            });
    }
}
