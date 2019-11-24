<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LogViewLivestock extends Model
{
    //
    protected$fillabel=[
        'ip_address', 'livestock_id'
    ];

    public function livestock(){
    	return $this->belongsTo('App\Models\Livestock');
    }
}
