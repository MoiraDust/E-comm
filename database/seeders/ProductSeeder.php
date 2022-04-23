<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'productName'=>'Vox badge',
            'price'=>'60',
            'category'=>'badge',
            'description'=>'vox badge',
            'gallery'=>'https://s1.ax1x.com/2022/04/23/LfTGVJ.jpg'
        ]);
        DB::table('products')->insert([
            'productName'=>'Mysta badge',
            'price'=>'60',
            'category'=>'badge',
            'description'=>'mysta badge',
            'gallery'=>'https://s1.ax1x.com/2022/04/23/LfTlKU.jpg'
        ]);
        DB::table('products')->insert([
            'productName'=>'Ike badge',
            'price'=>'60',
            'category'=>'badge',
            'description'=>'Ike badge',
            'gallery'=>'https://s1.ax1x.com/2022/04/23/LfTMvT.jpg'
        ]);
    }
}
