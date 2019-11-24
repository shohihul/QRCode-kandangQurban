<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LivestockHistory extends Model
{
    //
    protected $fillabel=[
        'title','description','image', 'livestock_id'
    ];

    public function livestock(){
    	return $this->belongsTo('App\Models\Livestock');
    }
}
