<?php

use Illuminate\Database\Seeder;

class BookingTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Booking::class, 20)->create();
    }
}
