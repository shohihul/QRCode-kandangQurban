<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    //
    protected$fillabel=[
        'name',
    ];

    public function regencie(){
    	return $this->hasMany('App\Models\Regencie');
    }
}
