<?php

use App\Hotel;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::truncate();
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Xvladqt\Faker\LoremFlickrProvider($faker));
        for ($i = 0; $i < 50; $i++) {
            Hotel::create([
                'name' => $faker->company,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'image' => $faker->imageUrl($width = 640, $height = 480, ['hotels', 'buildings'],true),
                'longitude' => $faker->longitude($min = 74.39, $max = 74.40),
                'latitude' => $faker->latitude($min = 31.47, $max = 31.56)

            ]);
        }
    }
}
