<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livestock extends Model
{
    //
    protected $fillable =[
        'name','price','stock','weight','description','image','qr_code'


    ];

    public function livestocks(){
    	return $this->belongsTo('App\Cattleman');
    }

    public function livestock_tipes(){
    	return $this->belongsTo('App\LivestockType');
    }

    public function log_livestocks(){
    	return $this->hasMany('App\LogViewLivestock');
    }
    public function livestocks_histories(){
    	return $this->hasMany('App\LivestockHistorie');
    }


}
