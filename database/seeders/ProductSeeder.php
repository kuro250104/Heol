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
            'name'=>'Sweat Serena Willams',
            'category_id'=>'2',
            'collection_id'=>'1',
            'price'=>'90',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image1.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Jogging Serena Willams ',
            'category_id'=>'3',
            'collection_id'=>'1',
            'price'=>'90',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image2.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Serena Willams ',
            'category_id'=>'1',
            'collection_id'=>'1',
            'price'=>'180',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image3.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Brassière Vanina Paoletti ',
            'category_id'=>'4',
            'collection_id'=>'2',
            'price'=>'50',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image4.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Short Vanina Paoletti ',
            'category_id'=>'4',
            'collection_id'=>'2',
            'price'=>'60',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image5.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Polo Vanina Paoletti ',
            'category_id'=>'7',
            'collection_id'=>'2',
            'price'=>'60',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image6.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Jupe Vanina Paoletti ',
            'category_id'=>'6',
            'collection_id'=>'2',
            'price'=>'40',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image7.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Vanina Paoletti ',
            'category_id'=>'1',
            'collection_id'=>'2',
            'price'=>'210',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image8.png'
        ]);

        \DB::table('products')->insert([
        'name'=>'T-Shirt Oscar Robertson',
        'category_id'=>'8',
        'collection_id'=>'3',
        'price'=>'50',
        'important_to_note'=>'nb',
        'description'=>'nb',
        'image'=>'image9.png'
        ]);

        \DB::table('products')->insert([
            'name'=>'Short Oscar Robertson ',
            'category_id'=>'5',
            'collection_id'=>'3',
            'price'=>'50',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image10.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Oscar Robertson ',
            'category_id'=>'1',
            'collection_id'=>'3',
            'price'=>'100',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image11.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Sac Usain Bolt ',
            'category_id'=>'9',
            'collection_id'=>'4',
            'price'=>'22',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image12.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Baskets Usain Bolt ',
            'category_id'=>'10',
            'collection_id'=>'4',
            'price'=>'150',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image13.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Usain Bolt ',
            'category_id'=>'1',
            'collection_id'=>'4',
            'price'=>'170',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image14.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Chaussettes Lewis Hamilton',
            'category_id'=>'11',
            'collection_id'=>'5',
            'price'=>'20',
            'important_to_note'=>'nb',
            'description'=>'nb',
            'image'=>'image15.png'
        ]);

    }
}
