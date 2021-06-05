<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranslatedImages extends Model
{
    //
    protected $fillable=[
        'image',
        'file_id',
    ];
    
    public function transFiles(){
        return $this->belongsTo(TranslatedFiles::class,'file_id');
    }

}
