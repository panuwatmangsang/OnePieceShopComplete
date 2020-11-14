<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessoriesProduct extends Model
{
    protected $fillable = [
        'accessories_imagePath',
        'accessories_title',
        'accessories_price'
    ];
}
