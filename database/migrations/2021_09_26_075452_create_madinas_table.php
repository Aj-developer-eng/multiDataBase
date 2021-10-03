<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMadinasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madinas', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_id');
              $table->string('hotel_name');
               $table->string('translated_name');
                $table->string('star_rating');
                 $table->string('continent_id');
                  $table->string('country_id');
                   $table->string('city_id');
                    $table->string('area_id');
                     $table->string('longitude');
                      $table->string('latitude');
                       $table->string('hotel_url');
                        $table->string('rating_average');
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
        Schema::dropIfExists('madinas');
    }
}
