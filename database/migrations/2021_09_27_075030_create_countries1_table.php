<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountries1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries1', function (Blueprint $table) {
            $table->id();
             $table->string('country_id');
              $table->string('continent_id');
               $table->string('country_name');
                $table->string('country_translated');
                 $table->string('active_hotels');
                  $table->string('country_iso');
                   $table->string('country_iso2');
                    $table->string('longitude');
                     $table->string('latitude');
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
        Schema::dropIfExists('countries1');
    }
}
