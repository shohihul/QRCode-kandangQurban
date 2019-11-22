<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestocks extends Model
{
    //
    protected $fillable =[
        'name','price','stock','weight','description','image','qr_code'


    ];

    public function livestocks(){
    	return $this->belongsTo('App\cattlemans');
    }

    public function livestock_tipes(){
    	return $this->belongsTo('App\livestock_types');
    }

    public function log_livestocks(){
    	return $this->hasMany('App\log_views_livestock');
    }
    public function livestocks_histories(){
    	return $this->hasMany('App\livestock_histories');
    }


}
