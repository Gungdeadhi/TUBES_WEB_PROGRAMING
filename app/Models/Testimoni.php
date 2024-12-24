<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Testimoni extends Model
{
    use Hasfactory;

    protected $table = 'testimoni';

    protected $fillable = [
        'image_testi'
    ];
}
