<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Product extends Model
{
    use Hasfactory;

    protected $table = 'products';

    protected $fillable = [
        'merek',
        'nama',
        'year',
        'price',
        'description',
        'images',
    ];

    public function images()
    {
        return $this->hasMany(Images::class, 'product_id');
    }
    

}
