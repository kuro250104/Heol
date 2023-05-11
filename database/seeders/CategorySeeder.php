<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Ensemble",
            "Sweat",
            "Jogging",
            "Brassière",
            "Short",
            "Jupe",
            "Polo",
            "T-shirt",
            "Sac",
            "Basket",
            "Chaussette"
        ];
        foreach($datas as $data) {
            \DB::table('categories')->insert(['name'=>$data]);
        }
    }
}
