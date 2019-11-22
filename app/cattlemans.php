<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cattlemans extends Model
{
   
    //
    protected $fillable=[
        'email','name','address','gender','password','photo_profile','qr_code',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function livestock(){
    	return $this->hasMany('App\livestock');
    }
    public function provinces(){
    	return $this->belongsTo('App\provinces');
    }
    public function regencies(){
    	return $this->belongsTo('App\regencies');
    }
    public function log_cattlemans(){
    	return $this->hasMany('App\log_views_cattlemans');
    }
    public function cattlemans_histories(){
    	return $this->hasMany('App\cattlemans_histories');
    }


}
