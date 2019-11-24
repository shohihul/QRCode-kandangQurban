<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CattlemanHistorie extends Model
{
    //
    protected$fillabel=[
        'title','description','image',
    ];
    public function cattlemans(){
    	return $this->belongsTo('App\Cattleman');
    }
}
