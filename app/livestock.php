<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestock extends Model
{
    //
    protected $fillable =[
        'name','price','stock','weight','description','image','qr_code'


    ];

    public function livestocks(){
    	return $this->belongsTo('App\cattleman');
    }

    public function livestock_tipes(){
    	return $this->belongsTo('App\livestock_type');
    }

    public function log_livestocks(){
    	return $this->hasMany('App\log_view_livestock');
    }
    public function livestocks_histories(){
    	return $this->hasMany('App\livestock_historie');
    }


}
