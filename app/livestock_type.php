<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class livestock_type extends Model
{
    //
    protected$fillabel=[
        'name',
    ];

    public function livestock_types(){
    	return $this->hasMany('App\livestock');
    }

    public function livestock_categories(){
    	return $this->belongsTo('App\livestock_categorie');
    }
}
