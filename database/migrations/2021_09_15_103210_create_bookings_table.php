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
             $table->increments('id');

        $table->string('title');
         
        $table->string('user_id');

        $table->string('body')->nullable();

        $table->timestamps();
        });


         Schema::connection('mysql2')->create('bookings', function (Blueprint $table) {
             $table->increments('id');

        $table->string('title');

        $table->string('user_id');

        $table->string('body')->nullable();

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
