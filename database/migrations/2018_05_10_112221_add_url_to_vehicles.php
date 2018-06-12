<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

//forgot to add url column to vehicles tables, that's how we do it.
//
//1.Run command php artisan make:migration add_url_to_vehicles
//2.New table will be created, accessible in migration folder(add_url_to_vehicles.php)
//3. Add $table->string('url');
//4. Add $table->dropColumn('url');
//5. Run command php artisan migrate et voila !


class AddUrlToVehicles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->string('url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vehicles', function (Blueprint $table) {
            $table->dropColumn('url');
        });
    }
}
