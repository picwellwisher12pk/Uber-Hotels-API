<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    $faker->addProvider(new Xvladqt\Faker\LoremFlickrProvider($faker));
    return [
        'type' => $faker->randomElements($array = array ('economy','luxury'), $count = 1)[0],
        'beds' => $faker->numberBetween(1,4),
        // 'facilities' => $faker->words($nb = 3, $asText = false),
        // 'image' => "http://loremflickr.com/640/480/cats/",
        'image' => "https://loremflickr.com/640/480/hotels,rooms?random=".$faker->numberBetween($min = 1, $max = 50),
        'price' => $faker->numberBetween(10000,20000),
        'capacity' => $faker->numberBetween(1,6),
        'is_available' => $faker->boolean($chanceOfGettingTrue = 50),
        'hotel_id' => factory(App\Hotel::class)
        // 'hotel_id' => 1
    ];
});
