<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            "Serena Willams",
            "Vanina Paoletti",
            "Oscar Robertson",
            "Usain bolt",
            "Lewis Hamilton",
        ];
        foreach($datas as $data) {
            \DB::table('collections')->insert(['name'=>$data]);
        }
    }
}
