<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('vehicle_name');
            $table->string('vehicle_Brand');
            $table->float('price_per_day');
            $table->integer('model_year');
            $table->string('vehicle_color');
            $table->string('image');
            $table->integer('vehicle_year');
            $table->text('description');
            $table->integer('seating_capacity');
            $table->string('fuel_type');
            $table->string('transmission_type');
            $table->integer('Engine_Capacity');
            $table->string('Airbag');
            $table->string('CDPlayer');
            $table->string('power_steering');
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
        Schema::dropIfExists('vehicles');
    }
}
