<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestock_categories extends Model
{
    //
    protected$fillabel=[
        'name',
    ];

    public function livestock_types(){
    	return $this->hasMany('App\livestock_types');
    }
}
