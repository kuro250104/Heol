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
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires.',
            'description'=>"Un Sweatshirt unisex pensé pour vous apporter du confort et de la douceur aussi bien à porter au quotidien qu’ après votre séance de sport.
            À base de coton issu de l'agriculture biologique certifié GOTS et de polyester recyclé.",
            'composition'=>'50% Polyester recyclé - 50% Coton bio',
            'image'=>'image1.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Jogging Serena Willams ',
            'category_id'=>'3',
            'collection_id'=>'1',
            'price'=>'90',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires.',
            'description'=>"Un pantalon unisex pensé pour votre confort et faciliter vos mouvements au quotidien.
            À base de coton issu de l'agriculture biologique certifié GOTS et de polyester recyclé",
            'composition'=>'50% Polyester recyclé - 50% Coton bio',
            'image'=>'image2.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Serena Willams ',
            'category_id'=>'1',
            'collection_id'=>'1',
            'price'=>'180',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>"Un Sweatshirt unisex pensé pour vous apporter du confort et de la douceur aussi bien à porter au quotidien qu’ après votre séance de sport.
            À base de coton issu de l'agriculture biologique certifié GOTS et de polyester recyclé.Un pantalon unisex pensé pour votre confort et faciliter vos mouvements au quotidien.
            À base de coton issu de l'agriculture biologique certifié GOTS et de polyester recyclé",
            'composition'=>'50% Polyester recyclé - 50% Coton bio',
            'image'=>'image3.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Brassière Laure Manaudou ',
            'category_id'=>'4',
            'collection_id'=>'2',
            'price'=>'50',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>'Une brassière agréable à porter autant lors d’une séance de sport que lors d’une journée de travail.
            Ce produit est entièrement confectionné à partir de polyester recyclé.',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image4.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Short Laure Manaudou ',
            'category_id'=>'4',
            'collection_id'=>'2',
            'price'=>'60',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires.',
            'description'=>'Un short innovant avec sa ceinture en V, qui vient épouser les formes et accompagner vos mouvements aussi bien durant votre sport qu’au quotidien.
            Ce produit est entièrement confectionné à partir de polyester recyclé.
            Idéale pour les sports cardio.',
            'composition'=>'100% Polyester recyclé.',
            'image'=>'image5.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Polo Vanina Paoletti ',
            'category_id'=>'7',
            'collection_id'=>'2',
            'price'=>'60',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>'Le polo de sport est respirant et ultra léger, il t’accompagnera au quotidien et même lors de tes séances de sport.
            Ce produit est entièrement réalisé en polyester recyclé
            Idéale pour les sports cardio',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image6.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Jupe Vanina Paoletti ',
            'category_id'=>'6',
            'collection_id'=>'2',
            'price'=>'40',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>'Une jupe qui vient se positionner sur le short afin de lui donner un côté aérien et plus féminin.
            Ce produit est entièrement confectionné à partir de polyester recyclé.',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image7.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Vanina Paoletti ',
            'category_id'=>'1',
            'collection_id'=>'2',
            'price'=>'210',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>'Le polo de sport est respirant et ultra léger, il t’accompagnera au quotidien et même lors de tes séances de sport.
            Ce produit est entièrement réalisé en polyester recyclé
            Une jupe qui vient se positionner sur le short afin de lui donner un côté aérien et plus féminin.
            Ce produit est entièrement confectionné à partir de polyester recyclé.
            Idéale pour les sports cardio',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image8.png'
        ]);

        \DB::table('products')->insert([
        'name'=>'T-Shirt Oscar Robertson',
        'category_id'=>'8',
        'collection_id'=>'3',
        'price'=>'50',
        'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
        'description'=>'Le t-shirt de sport est respirant et ultra léger, il t’accompagnera lors de toutes tes séances de sport.
        Ce produit est entièrement composé de polyester recyclé
        Idéale pour les sports cardio',
        'composition'=>'100% Polyester recyclé',
        'image'=>'image9.png'
        ]);

        \DB::table('products')->insert([
            'name'=>'Short Oscar Robertson ',
            'category_id'=>'5',
            'collection_id'=>'3',
            'price'=>'50',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>'Un short aux couleurs de la marque qui vous accompagne au quotidien grâce à sa matière légère.
            Ce produit est entièrement réalisé en polyester recyclé
            Idéale pour les sports cardio',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image10.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Oscar Robertson ',
            'category_id'=>'1',
            'collection_id'=>'3',
            'price'=>'100',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>'Le t-shirt de sport est respirant et ultra léger, il t’accompagnera lors de toutes tes séances de sport.
            Ce produit est entièrement composé de polyester recyclé
            Idéale pour les sports cardio
            Un short aux couleurs de la marque qui vous accompagne au quotidien grâce à sa matière légère.
            Ce produit est entièrement réalisé en polyester recyclé
            Idéale pour les sports cardio',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image11.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Sac Usain Bolt ',
            'category_id'=>'9',
            'collection_id'=>'4',
            'price'=>'22',
            'important_to_note'=>'A completer',
            'description'=>'A completer',
            'composition'=>'100% Polyester recyclé',
            'image'=>'image12.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Baskets Usain Bolt ',
            'category_id'=>'10',
            'collection_id'=>'4',
            'price'=>'150',
            'important_to_note'=>'A completer',
            'description'=>'A completer',
            'composition'=>'A completer',
            'image'=>'image13.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Ensemble Usain Bolt ',
            'category_id'=>'1',
            'collection_id'=>'4',
            'price'=>'170',
            'important_to_note'=>'A completer',
            'description'=>'A completer',
            'composition'=>'A completer',
            'image'=>'image14.png'
        ]);
        \DB::table('products')->insert([
            'name'=>'Chaussettes Lewis Hamilton',
            'category_id'=>'11',
            'collection_id'=>'5',
            'price'=>'20',
            'important_to_note'=>'Lavage délicat à 30° en machine avec des couleurs similaires',
            'description'=>"Des chaussettes à l’instar de la marque avec ce détail du V qui rend la paire de chaussettes uniques. Vous pouvez accorder cette paire à votre tenue pour un style 100% HEOL.
            À base de coton issu de l'agriculture biologique certifié GOTS",
            'composition'=>'100% Coton biologique',
            'image'=>'image15.png'
        ]);

    }
}
