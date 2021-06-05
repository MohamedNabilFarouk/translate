<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable= [
        'name',
        'email',
        'phone',
        // 'address',
        'file_id',
        'from_page',
        'to_page',
        'copy_no',
        'total',

        'type',
'deliver_address',
'deliver_phone',
'pickup_office',
'attach_code',


'code',
    ];

    protected function TranslatedFiles(){
        return $this->hasMany(TranslatedFiles::class,'id','file_id');
    }
}
