<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveStockHistorie extends Model
{
    //
    protected$fillabel=[
        'title','description','image',
    ];

    public function livestocks(){
    	return $this->belongsTo('App\Livestock');
    }
}
