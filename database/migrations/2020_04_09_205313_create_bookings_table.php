<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->date('checkin');
            $table->date('checkout');
            $table->integer("numberOfPeople");
            $table->string('email', 255);
            $table->string('phone', 20);
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('room_id');
            $table->unsignedInteger('hotel_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
