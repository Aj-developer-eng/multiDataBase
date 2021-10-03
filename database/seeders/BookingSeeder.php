<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('bookings')->insert([
             'title' => 'New york',
             'user_id' => 2,
             
         ]);
          DB::table('bookings')->insert([
             'title' => 'california',
             'user_id' => 2,
             
         ]);
    //     DB::connection('mysql2')->table('bookings')->insert([
    //          'title' => 'ireland',
    //          'user_id' => 2,
             
    //      ]);
    // }
}


}
