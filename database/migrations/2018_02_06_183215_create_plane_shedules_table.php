<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneShedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plane_shedules', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('plane_id')->unsigned();
            $table->string('day');
            $table->integer('stop')->unsigned()->default(0);

            $table->string('takeoff_airport');
            $table->string('middle_stop_airport')->nullable();
            $table->string('landing_airport');
            $table->time('duration');
            $table->time('takeoff_time1');
            $table->time('landing_time1');
            $table->time('takeoff_time2')->nullable();
            $table->time('landing_time2')->nullable();

        
            $table->timestamps();

            $table->foreign('plane_id')->references('plane_id')->on('planes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plane_shedules');
    }
}
