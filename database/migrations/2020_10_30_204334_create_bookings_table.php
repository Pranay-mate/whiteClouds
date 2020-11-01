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
            $table->string('Fname');
            $table->string('Lname');
            $table->string('email');
            $table->string('age');
            $table->string('number');
            $table->string('gender');
            $table->string('country');
            $table->string('state');
            $table->string('zip');
            $table->string('to');
            $table->string('from');
            $table->string('DeptDate');
            $table->string('DeptTime');
            $table->string('Class');
            $table->string('tickets');
            $table->string('childrens');
            $table->string('cost');
            $table->string('payment');
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
        Schema::dropIfExists('bookings');
    }
}
