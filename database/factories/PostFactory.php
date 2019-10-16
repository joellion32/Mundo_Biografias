<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'name' 			=> $title,
        'slug' 			=> str_slug($title),
        'body' 			=> $faker->text(1000),
        'file' 			=> $faker->imageUrl($width = 381, $height = 441),
    ];
});
