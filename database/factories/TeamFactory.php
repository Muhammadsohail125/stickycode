<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'fullname' => $faker->name,
        'designation' => $faker->jobTitle,
        'telephone' => $faker->tollFreePhoneNumber,
        'mobile' => $faker->phoneNumber,
        'email' => $faker->freeEmail,
        'facebook_id' => $faker->freeEmail,
        'twitter_id' => $faker->freeEmail,
        'youtube_id' => $faker->freeEmail,
        'pinterest_id' => $faker->freeEmail,
        'profile' => $faker->text($maxNbChars = 600),
        'team_img' => 'No Img Found',
        'status' => $faker->randomElement(['DEACTIVE', 'ACTIVE']),
    ];
});
