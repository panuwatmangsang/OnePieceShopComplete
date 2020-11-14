<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PosterProduct extends Model
{
    protected $fillable = [
        'poster_imagePath',
        'poster_title',
        'poster_price'
    ];
}
