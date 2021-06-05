<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
 
    protected $fillable = [
        'from_to',
        'price',
        'extra_copy_price'
    
        ];
}
