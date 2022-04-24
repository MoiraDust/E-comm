<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrendingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('trending')->insert([
            'productName'=>'Shu badge',
            'price'=>'60',
            'category'=>'badge',
            'description'=>'Shu badge',
            'gallery'=>'https://s1.ax1x.com/2022/04/23/LfT1rF.png'
        ]);
        DB::table('trending')->insert([
            'productName'=>'Luca badge',
            'price'=>'60',
            'category'=>'badge',
            'description'=>'Luca badge',
            'gallery'=>'https://s1.ax1x.com/2022/04/23/LfTMvT.jpg'
        ]);
    }
}
