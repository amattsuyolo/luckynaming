<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    // Random datetime of the current week
    $startingDate = $faker->dateTimeBetween('this week', '+6 days');
    // Random datetime of the current week *after* `$startingDate`
    $endingDate   = $faker->dateTimeBetween($startingDate, strtotime('+6 days'));

    return [
        'user_id' => factory(App\User::class),
        'title' => $faker->realText($maxNbChars = 15),
        'min_pic' => $faker->imageUrl($width = 640, $height = 480),
        'subtitle' => $faker->title,
        'body' => $faker->paragraph,
        'is_published' => 1,
        'published_at' =>  $startingDate,
        'published_until' =>$endingDate ,
    ];
});

