<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cattleman_historie extends Model
{
    //
    protected$fillabel=[
        'title','description','image',
    ];
    public function cattlemans(){
    	return $this->belongsTo('App\cattleman');
    }
}
