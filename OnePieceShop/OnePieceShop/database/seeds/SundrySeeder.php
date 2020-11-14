<?php

use Illuminate\Database\Seeder;

class SundrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/bepo3/bepo31.jpg',
            'sundry_title' => 'ฺBepo',
            'sundry_price' => 250
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/bepo/bepo.jpg',
            'sundry_title' => 'Bepo',
            'sundry_price' => 200
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/bepo2/bepo21.jpg',
            'sundry_title' => 'ฺBepo',
            'sundry_price' => 300
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/glass-water/glass-water4.jpg',
            'sundry_title' => 'One Piece Water Glass',
            'sundry_price' => 230
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/luffy-small/luffy-small2.jpg',
            'sundry_title' => 'Mini Luffy',
            'sundry_price' => 200
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry1.jpg',
            'sundry_title' => 'Luffy Water Glass',
            'sundry_price' => 100
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry3.jpg',
            'sundry_title' => 'Luffy Mattress set',
            'sundry_price' => 400
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry4.jpg',
            'sundry_title' => 'Luffy Mattress set',
            'sundry_price' => 350
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry5.jpeg',
            'sundry_title' => 'Luffy Doll',
            'sundry_price' => 250
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry6.jpg',
            'sundry_title' => 'Chopper Doll',
            'sundry_price' => 250
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry7.jpg',
            'sundry_title' => 'One Piece Doll',
            'sundry_price' => 300
        ]);
        $sundry->save();

        $sundry = new \App\SundryProduct([
            'sundry_imagePath' => '/images/sundry/sundry8.jpg',
            'sundry_title' => 'Chopper Doll',
            'sundry_price' => 250
        ]);
        $sundry->save();
    }
}
