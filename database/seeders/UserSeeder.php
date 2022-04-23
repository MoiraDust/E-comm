<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //dummy data
        DB::table('users')->insert([
            'name'=>'Mysta Rias',
            'email'=>'mystarias@email.com',
            'password'=>Hash::make('12345')
        ]);
        DB::table('users')->insert([
            'name'=>'Ike Eveland',
            'email'=>'ikeeveland@email.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
