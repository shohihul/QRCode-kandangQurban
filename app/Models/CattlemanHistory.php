<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CattlemanHistory extends Model
{
    //
    protected $fillabel=[
        'title','description','image', 'cattleman_id'
    ];

    public function cattleman(){
    	return $this->belongsTo('App\Models\Cattleman');
    }
}
