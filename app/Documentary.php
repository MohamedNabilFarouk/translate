<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentary extends Model
{
    //
    protected $fillable=[
        'name',
        'email',
        'phone',
        'office',
        'appointment',
    ];

    public function appointments(){
        return $this->belongsTo(OfficeAppointments::class,'appointment');
    }

    public function offices(){
        return $this->belongsTo(Office::class,'office');
    }
}
