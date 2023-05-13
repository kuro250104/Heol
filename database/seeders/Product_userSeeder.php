<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Product_userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products_users')->insert([
            'user_id'=>'1',
            'product_id'=>'1',
            'size_id'=>'3',
        ]);
    }
}
