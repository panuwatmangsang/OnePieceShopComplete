<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/kaido/kaido.jpg',
            'model_title' => 'Kaido',
            'model_price' => 650
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/jinbe/jinbe.jpg',
            'model_title' => 'Jinbe',
            'model_price' => 1300
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/luffy3/luffy31.jpg',
            'model_title' => 'Monkey D Luffy',
            'model_price' => 900
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/solo/solo.jpg',
            'model_title' => 'Roronoa Zoro',
            'model_price' => 450
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/mulgo/mulgo.jpg',
            'model_title' => 'Marco',
            'model_price' => 400
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/luffy-catacuri/luffy-catacuri.jpg',
            'model_title' => 'Charlotte Katakuri',
            'model_price' => 1250
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/frankky/frankky.jpg',
            'model_title' => 'Frankky',
            'model_price' => 450
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/hancock/hancock.jpg',
            'model_title' => 'Boa Hancock',
            'model_price' => 550
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/hancock-ship/hancock-ship.jpg',
            'model_title' => 'Hancock Ship',
            'model_price' => 300
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/luffy/luffy.jpg',
            'model_title' => 'Monkey D Luffy',
            'model_price' => 500
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/luffy2/luffy21.jpg',
            'model_title' => 'Monkey D Luffy',
            'model_price' => 490
        ]);
        $model->save();

        $model = new \App\ModelProduct([
            'model_imagePath' => '/images/model/mini-luffy/mini-luffy.jpg',
            'model_title' => 'Mini Luffy',
            'model_price' => 440
        ]);
        $model->save();
    }
}
