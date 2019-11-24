<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected$fillabel=[
        'name',
    ];
    public function cattlemans(){
    	return $this->hasMany('App\Cattleman');
    }
}
