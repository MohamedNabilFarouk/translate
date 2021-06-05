<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeAppointments extends Model
{
    //
    protected $fillable= [
        'office_id',
        'appointment',
];

public function offices(){
    return $this->belongsTo(Office::class,'office_id');
}
}
