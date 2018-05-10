<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planes', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('plane_id')->unsigned()->unique();
            $table->integer('airline_id')->unsigned();
            $table->integer('plane_capacity')->unsigned();
            $table->double('ticket_price');
            $table->timestamps();

           //$table->foreign('airline_id')->references('id')->on('airlines');

        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planes');
    }
}
