<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_attributes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vehicle_id');
            $table->string('sku');
            $table->string('additional_driver');
            $table->string('baby_sit');
            $table->string('personal_insurance');
            $table->float('price');
            $table->integer('stock');
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
        Schema::dropIfExists('vehicle_attributes');
    }
}
