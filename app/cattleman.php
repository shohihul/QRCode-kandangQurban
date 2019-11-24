<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cattleman extends Model
{
   
    //
    protected $fillable=[
        'email','name','address','gender','password','photo_profile','qr_code',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function livestock(){
    	return $this->hasMany('App\Livestock');
    }
    public function provinces(){
    	return $this->belongsTo('App\Province');
    }
    public function regencies(){
    	return $this->belongsTo('App\Regencie');
    }
    public function log_cattlemans(){
    	return $this->hasMany('App\LogLiewCattleman');
    }
    public function cattlemans_histories(){
    	return $this->hasMany('App\CattlemanHistorie');
    }


}
