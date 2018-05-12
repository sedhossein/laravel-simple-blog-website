<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{

    public function run()
    {
        factory(\App\Tag::class,5)
            ->create()
        ->each( function ($tag) {
            $tag->posts()
                ->saveMany( factory(\App\Post::class,10)->make() );
        });
    }
}
