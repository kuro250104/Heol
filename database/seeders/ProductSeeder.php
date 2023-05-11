<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'name'=>'Serena Willams Sweat',
            'category_id'=>'2',
            'collection_id'=>'1',
            'price'=>'90',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Serena Willams Jogging',
            'category_id'=>'3',
            'collection_id'=>'1',
            'price'=>'90',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Serena Willams Ensemble',
            'category_id'=>'1',
            'collection_id'=>'1',
            'price'=>'180',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Vanina Paoletti Brassière',
            'category_id'=>'4',
            'collection_id'=>'2',
            'price'=>'50',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Vanina Paoletti Short',
            'category_id'=>'4',
            'collection_id'=>'2',
            'price'=>'60',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Vanina Paoletti Polo',
            'category_id'=>'7',
            'collection_id'=>'2',
            'price'=>'60',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Vanina Paoletti Jupe',
            'category_id'=>'6',
            'collection_id'=>'2',
            'price'=>'40',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Vanina Paoletti Ensemble',
            'category_id'=>'1',
            'collection_id'=>'2',
            'price'=>'210',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);

        \DB::table('products')->insert([
        'name'=>'Oscar Robertson T-Shirt',
        'category_id'=>'8',
        'collection_id'=>'3',
        'price'=>'50',
        'important_to_note'=>'nb',
        'description'=>'nb'
        ]);

        \DB::table('products')->insert([
            'name'=>'Oscar Robertson Short',
            'category_id'=>'5',
            'collection_id'=>'3',
            'price'=>'50',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Oscar Robertson Ensemble',
            'category_id'=>'1',
            'collection_id'=>'3',
            'price'=>'100',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Usain Bolt Sac',
            'category_id'=>'9',
            'collection_id'=>'4',
            'price'=>'22',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Usain Bolt Baskets',
            'category_id'=>'10',
            'collection_id'=>'4',
            'price'=>'150',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Usain Bolt Ensemble',
            'category_id'=>'1',
            'collection_id'=>'4',
            'price'=>'170',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);
        \DB::table('products')->insert([
            'name'=>'Lewis Hamilton',
            'category_id'=>'11',
            'collection_id'=>'5',
            'price'=>'20',
            'important_to_note'=>'nb',
            'description'=>'nb'
        ]);

    }
}
