<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');

        $table->string('title');

        $table->string('body')->nullable();

        $table->timestamps();

        });
         Schema::connection('mysql2')->create('customers', function (Blueprint $table) {

        $table->increments('id');

        $table->string('title');

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
        Schema::dropIfExists('customers');
    }
}
