<?php
use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */ public function run()
    {
        factory(App\Hotel::class, 20)->create();
    }
}
