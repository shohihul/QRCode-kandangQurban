<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cattleman extends Model
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
    	return $this->belongsTo('App\province');
    }
    public function regencies(){
    	return $this->belongsTo('App\regencie');
    }
    public function log_cattlemans(){
    	return $this->hasMany('App\log_view_cattleman');
    }
    public function cattlemans_histories(){
    	return $this->hasMany('App\cattleman_historie');
    }


}
