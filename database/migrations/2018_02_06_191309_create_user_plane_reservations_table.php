<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPlaneReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plane_reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('plane_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('schedule_id')->unsigned();
            $table->integer('no_adult');


            $table->double('total_amount');
            $table->timestamps();

            $table->foreign('plane_id')->references('plane_id')->on('planes');
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('schedule_id')->references('id')->on('plane_schedules');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_plane_reservations');
    }
}
