<?php

use Illuminate\Database\Seeder;

class PosterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster3.jpg',
            'poster_title' => 'Monkey D Dragon',
            'poster_price' => 450
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster9.jpg',
            'poster_title' => 'Shank Coos',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster1.jpg',
            'poster_title' => 'God Usopp',
            'poster_price' => 300
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster2.jpg',
            'poster_title' => 'Charlotte Katakuri',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster4.jpg',
            'poster_title' => 'Charlotte Linlin',
            'poster_price' => 450
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster5.jpg',
            'poster_title' => 'Edward Newgate',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster6.jpg',
            'poster_title' => 'Mani',
            'poster_price' => 450
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster7.jpg',
            'poster_title' => 'Franky',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster8.jpg',
            'poster_title' => 'Brook',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster10.jpg',
            'poster_title' => 'Gold D Roger',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster11.jpg',
            'poster_title' => 'Monkey D Luffy',
            'poster_price' => 440
        ]);
        $poster->save();

        $poster = new \App\PosterProduct([
            'poster_imagePath' => '/images/poster/poster12.jpg',
            'poster_title' => 'Roronoa Zoro',
            'poster_price' => 440
        ]);
        $poster->save();
    }
}
