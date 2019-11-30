<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    //
    protected $fillable =[
        'cattleman_id', 'livestock_type_id','name','price','stock','weight','description','image','qr_code'


    ];

    public function cattleman(){
    	return $this->belongsTo('App\Models\Cattleman');
    }

    public function livestockType(){
    	return $this->belongsTo('App\Models\LivestockType');
    }

    public function logViewLivestock(){
    	return $this->hasMany('App\Models\LogViewLivestock');
    }
    public function livestockHistory(){
    	return $this->hasMany('App\Models\LivestockHistory');
    }


}
