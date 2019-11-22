<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cattlemans_histories extends Model
{
    //
    protected$fillabel=[
        'title','description','image',
    ];
    public function cattlemans(){
    	return $this->belongsTo('App\cattlemans');
    }
}
