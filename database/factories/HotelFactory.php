<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hotel;
use Faker\Generator as Faker;

$factory->define(Hotel::class, function (Faker $faker) {
    $faker->addProvider(new Xvladqt\Faker\LoremFlickrProvider($faker));
    return [
        'name' => $faker->company,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address,
        'image' => "https://loremflickr.com/640/480/hotels,buildings?random=".$faker->numberBetween($min = 1, $max = 50),
        'longitude' => $faker->longitude($min = 74.4001, $max = 74.2277),
        'latitude' => $faker->latitude($min = 31.4148, $max = 31.5743)
    ];
});

