<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_reservations', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('hotel_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('room_id')->unsigned();
            $table->integer('no_rooms')->nullable();
            $table->integer('no_persons');

            $table->date('checkIn_date')->nullable();
            $table->date('checkOut_date')->nullable();

            $table->double('total_amount');


            $table->foreign('hotel_id')->references('id')->on('hotels');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('room_id')->references('id')->on('rooms');

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
        Schema::dropIfExists('hotel_reservations');
    }
}
