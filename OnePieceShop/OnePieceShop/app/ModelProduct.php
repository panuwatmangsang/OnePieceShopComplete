<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelProduct extends Model
{
    protected $fillable = [
        'model_imagePath',
        'model_title',
        'model_price'
    ];
}
