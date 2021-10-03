<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          // DB::table('ausers')->insert([
          //     'name' => 'usrzdb1',
          //     'role' => 'admin',
          //     'email' => 'usrzdb1@gmail.com',
          //     'password' => Hash::make('11111'),
          // ]);
          DB::connection('mysql2')->table('users')->insert([
               'name' => 'usrzdb2',

               'email' => 'usrzdb2@gmail.com',
               'password' => Hash::make('11111'),
           ]);
    }
}
