<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    //
    protected $fillable= [
            'office',
            'address',
            'type',
            'price',
    ];

    public function appointments(){
        return $this->hasMany(OfficeAppointments::class);
    }
}
