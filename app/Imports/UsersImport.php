<?php

namespace App\Imports;

use App\Models\hotel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new hotel([
           'hotel_id'     => $row[0],
           'hotel_name'    => $row[1], 
           'translated_name' => $row[2],
        ]);
    }
}
