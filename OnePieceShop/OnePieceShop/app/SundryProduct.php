<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SundryProduct extends Model
{
    protected $fillable = [
        'sundry_imagePath',
        'sundry_title',
        'sundry_price'
    ];
}
