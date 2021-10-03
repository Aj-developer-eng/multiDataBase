<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomtypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomtypes', function (Blueprint $table) {
            $table->id();
             $table->string('hotel_id');
            $table->string('hotel_room_type_id');
            $table->string('standard_caption');
            $table->string('standard_caption_translated');
            $table->string('max_occupancy_per_room');
          $table->string('no_of_room');
            $table->string('size_of_room');
             $table->string('room_size_incl_terrace');
              $table->string('views');
            $table->string('max_extrabeds');
            $table->string('max_infant_in_room');
            $table->string('hotel_room_type_picture');
            $table->string('bed_type');
          $table->string('shared_bathroom');
        
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
        Schema::dropIfExists('roomtypes');
    }
}
