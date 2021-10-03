<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomtype extends Model
{
    use HasFactory;
    protected $table = 'roomtypes';
    protected $fillable = [
        'hotel_id',
        'hotel_room_type_id',
        'standard_caption',
        'standard_caption_translated',
        'max_occupancy_per_room',
        'no_of_room',
        'size_of_room',
        'room_size_incl_terrace',
        'max_extrabeds',
        'max_infant_in_room',
        'hotel_room_type_picture',
        'bed_type',
        'hotel_master_room_type_id',
        'shared_bathroom',
       
    ];

}
