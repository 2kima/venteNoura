<?php


use App\Produit;
use Illuminate\Database\Seeder;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { Produit::create([
            'name' => 'Maquereau',
              'slug' => 'Maquereau',
             'prix' => 1000,
            'frais_de_transport' => 1000,
           'category_id' => 1,
            'brand_id' => 1,
            'image' => '1.JPG'
        ]);

        Produit::create([
            'name' => 'sol',
              'slug' => 'sol',
           'prix' => 700,
            'frais_de_transport' => 1000,
            'category_id' => 1,
            'brand_id' => 2,
            'image' => '2.png'
        ]);

        Produit::create([
            'name' => 'cap',
              'slug' => 'cap',
            'prix' => 500,
            'frais_de_transport' => 1000
            'category_id' => 2,
            'brand_id' => 5,
            'image' => '3.png'
        ]);

        Produit::create([
            'name' => 'biconcave',
              'slug' => 'biconcave',
            'prix' => 800,
            'frais_de_transport' =>1000,
            'category_id' => 3,
            'brand_id' => 3,
            'image' => '4.jpg'
        ]);

        Produit::create([
            'name' => 'capitaine',
              'slug' => 'capitaine',
            'prix' => 700,
            'frais_de_transport' => 1000,
            'category_id' => 4,
            'brand_id' => 4,
            'image' => '5.png'
        ]);

        Produit::create([
            'name' => 'machoiron',
              'slug' => 'machoiron',
            'prix' => 1200,
            'frais_de_transport' => 1000,
           'category_id' => 5,
            'brand_id' => 4,
            'image' => '6.png'
        ]);

        Produit::create([
            'name' => 'ton',
              'slug' => 'ton',
           'prix' =>1000
            'frais_de_transport' => 1000,
            'category_id' => 2,
            'brand_id' => 5,
            'image' => '7.jpg'
        ]);
    
    

    }
}
