<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('car_id');
            $table->unsignedInteger('customer_id');
            $table->string('pick_up_location');
            $table->string('drop_off_location');
            $table->string('total_price');
            $table->foreign('car_id')->references('id')->on('cars_tables')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customer_tables')->onDelete('cascade');
            $table->string('pick_up_time');
            $table->string('drop_off_time');
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
        Schema::dropIfExists('reservation_tables');
    }
}
