<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClothProduct extends Model
{
    protected $fillable = [
        'cloth_imagePath',
        'cloth_title',
        'cloth_price'
    ];
}
