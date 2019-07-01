<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //protected fillable = ['name','company','descrition','amount','productimg'];
    protected $fillable = [
        'nombre','ap','am'
    ];
}
