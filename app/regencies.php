<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regencies extends Model
{
    //
    protected$fillabel=[
        'name',
    ];
    public function cattlemans(){
    	return $this->hasMany('App\cattlemans');
    }
}
