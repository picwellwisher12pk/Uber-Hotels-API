<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum("type",["economy","luxury"])->default('economy');
            $table->integer("beds")->default(1);
            $table->set("facilities",['internet', 'seaview'])->nullable();
            $table->integer("price")->default(10000);
            $table->integer("capacity")->default(2);
            $table->string('image', 255)->nullable();
            $table->boolean("is_available")->default(true);
            $table->unsignedInteger('hotel_id');
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
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
        Schema::dropIfExists('rooms');
    }
}
