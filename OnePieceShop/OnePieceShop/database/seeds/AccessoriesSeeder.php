<?php

use Illuminate\Database\Seeder;

class AccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories8.jpg',
            'accessories_title' => 'Hancock Earrings',
            'accessories_price' => 140
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories3.jpg',
            'accessories_title' => 'Zoro Sword',
            'accessories_price' => 125
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories9.jpg',
            'accessories_title' => 'Bangle',
            'accessories_price' => 130
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories1.jpg',
            'accessories_title' => 'Necklace',
            'accessories_price' => 150
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories2.jpg',
            'accessories_title' => 'Luffy Hat',
            'accessories_price' => 140
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories4.jpeg',
            'accessories_title' => 'Zoro Sword',
            'accessories_price' => 125
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories5.jpg',
            'accessories_title' => 'Zoro Sword',
            'accessories_price' => 130
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories6.jpg',
            'accessories_title' => 'Chopper',
            'accessories_price' => 150
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories7.jpg',
            'accessories_title' => 'Ace Hat',
            'accessories_price' => 140
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories12.jpg',
            'accessories_title' => 'One Piece Ring',
            'accessories_price' => 125
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories10.jpg',
            'accessories_title' => 'One Piece Ring',
            'accessories_price' => 125
        ]);
        $accessories->save();

        $accessories = new \App\AccessoriesProduct([
            'accessories_imagePath' => '/images/accessories/accessories11.jpg',
            'accessories_title' => 'One Piece Ring',
            'accessories_price' => 125
        ]);
        $accessories->save();
    }
}
