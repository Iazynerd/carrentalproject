<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_tables', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('model');
            $table->string('doors');
            $table->string('seats');
            $table->string('suitcases');
            $table->string('bags');
            $table->string('transmition');
            $table->boolean('air_conditon');
            $table->string('image');
            $table->unsignedInteger('class_id');
            $table->foreign('class_id')->references('id')->on('class_tables')->onDelete('cascade');
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
        Schema::dropIfExists('car_tables');
    }
}
