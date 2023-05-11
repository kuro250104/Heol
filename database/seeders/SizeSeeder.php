<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "XS",
            "S",
            "M",
            "L",
            "XL",
            "XXL",
            "XXXL",

        ];
        foreach($datas as $data) {
            \DB::table('size')->insert(['name'=>$data]);
        }
    }
}
