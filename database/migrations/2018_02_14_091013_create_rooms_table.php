<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('hotel_id')->unsigned();
            $table->string('room_img');
            $table->string('room_name');
            $table->string('room_type');
            $table->integer('no_rooms_available');
            $table->integer('capacity');
            $table->double('price')->nullable();;
            $table->string('wifi_state')->nullable();;
            $table->string('welcome_drink')->nullable();;
            $table->string('parking');

            $table->timestamps();
            $table->foreign('hotel_id')->references('id')->on('hotels');
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
