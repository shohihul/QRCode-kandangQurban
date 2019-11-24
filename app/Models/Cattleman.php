<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cattleman extends Model
{
   
    //
    protected $fillable=[
        'email','name','address','gender', 'regency_id', 'password','photo_profile','qr_code', 
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function livestock(){
        return $this->hasMany('App\Models\Livestock');
    }

    public function regencie(){
        return $this->belongsTo('App\Models\Regencie');
    }

    public function logViewCattleman(){
        return $this->hasMany('App\Models\LogViewCattleman');
    }

    public function cattlemansHistory(){
        return $this->hasMany('App\Models\CattlemanHistory');
    }


}
