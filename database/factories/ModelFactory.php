<?php

use Faker\Generator as Faker;


$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});

$factory->define(\App\Post::class, function (Faker $faker){
    return [
        'user_id' => rand(1,30),
        'title' => $faker->name,
        'body' => $faker->text(1000),
    ];
});
