<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LiveStockType extends Model
{
    //
    protected$fillabel=[
        'name',
    ];

    public function livestock_types(){
    	return $this->hasMany('App\Livestock');
    }

    public function livestock_categories(){
    	return $this->belongsTo('App\LivestockCategorie');
    }
}
