<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Cart_ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('cart_product')->insert([
            'cart_id'=>'1',
            'product_id'=>'1',
            'size_id'=>'3',
        ]);
    }
}
