<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusCoordinatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_coordinates', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bus_id')->index();
            $table->decimal('latitude', 12, 8);
            $table->decimal('longitude', 12, 8);
            $table->decimal('speed', 4, 2);
            $table->timestamps();

            // Foreign keys
            $table->foreign('bus_id')->references('id')->on('buses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bus_coordinates');
    }
}
