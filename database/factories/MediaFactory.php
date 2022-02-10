<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Media;
use Faker\Generator as Faker;

$factory->define(Media::class, function (Faker $faker) {
    $title = $faker->name;
    return [
        'title' => $title,
        'slug' => Str::slug($title, '-'),
        'media_type' => 'ABC',
        'media_img' => 'No Img Found',
        'description' => $faker->text($maxNbChars = 600),
        'status' => $faker->randomElement(['DEACTIVE', 'ACTIVE']),
    ];
});
