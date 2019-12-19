<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CattlemanHistory extends Model
{
    //
    protected $fillable=[
        'title','description','image', 'cattleman_id'
    ];

    public function cattleman(){
    	return $this->belongsTo('App\Models\Cattleman');
    }
}
