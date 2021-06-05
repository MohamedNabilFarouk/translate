<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TranslatedFiles extends Model
{
    public $fillable=[
        'title',
        'des',
        'code',
        'beneficiary_id',
        'beneficiary_name',
        'phone',
        'team_id',
        'mode',
        'image',
        'file',

    ];

    public function translates(){
        return $this->hasOne(translate::class,'id','beneficiary_id');
    }

    public function teams(){
        return $this->belongsTo(team::class,'team_id');
    }

    public function transImages(){
        return $this->hasMany(TranslatedImages::class,'file_id');
    }

    public function lang(){
        return $this->belongsTo(Language::class,'lang_id');
    }
}
