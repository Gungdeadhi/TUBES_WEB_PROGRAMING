<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class productsSoldOut extends Model
{
    use Hasfactory;

    protected $table = 'products_soldout';

    protected $fillable = [
        'merek',
        'nama',
        'year',
        'price',
        'image_soldout',
    ];
}
