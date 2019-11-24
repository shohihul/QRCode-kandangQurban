<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regencie extends Model
{
    //
    protected$fillabel=[
        'name', 'province_id'
    ];

    public function cattleman(){
    	return $this->hasMany('App\Models\Cattleman');
    }

    public function province(){
    	return $this->belongsTo('App\Models\Province');
    }
}
