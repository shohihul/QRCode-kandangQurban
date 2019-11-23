<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestock_historie extends Model
{
    //
    protected$fillabel=[
        'title','description','image',
    ];

    public function livestocks(){
    	return $this->belongsTo('App\livestock');
    }
}
