<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('book_date');
            $table->bigInteger('table_id')->unsigned();
            $table->bigInteger('functionhall_id')->unsigned();
            $table->bigInteger('cottage_id')->unsigned();
            $table->timestamps();



            $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('functionhall_id')->references('id')->on('function_halls')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cottage_id')->references('id')->on('cottages')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
