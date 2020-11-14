<?php

use Illuminate\Database\Seeder;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt10.jpg',
            'cloth_title' => 'Luffy Shirt',
            'cloth_price' => 200
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt4.jpg',
            'cloth_title' => 'Luffy Shirt',
            'cloth_price' => 199
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt1.jpg',
            'cloth_title' => 'One Piece Shirt',
            'cloth_price' => 250
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt2.jpg',
            'cloth_title' => 'One Piece Shirt',
            'cloth_price' => 199
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt3.jpg',
            'cloth_title' => 'Law Shirt',
            'cloth_price' => 200
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt5.jpg',
            'cloth_title' => 'One Piece Shirt',
            'cloth_price' => 199
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt6.jpg',
            'cloth_title' => 'Luffy Shirt',
            'cloth_price' => 200
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt7.jpg',
            'cloth_title' => 'Luffy Shirt',
            'cloth_price' => 199
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt8.jpg',
            'cloth_title' => 'One Piece Shirt',
            'cloth_price' => 200
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt9.jpg',
            'cloth_title' => 'Nami Shirt',
            'cloth_price' => 199
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt11.jpg',
            'cloth_title' => 'Luffy Shirt',
            'cloth_price' => 200
        ]);
        $cloth->save();

        $cloth = new \App\ClothProduct([
            'cloth_imagePath' => '/images/shirt-shorts/shirt12.jpg',
            'cloth_title' => 'Luffy Shirt',
            'cloth_price' => 199
        ]);
        $cloth->save();
    }
}
