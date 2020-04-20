<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollVote extends Model
{
    /**
     * PollVote - PollObject relation ManyToOne
     * 
     * @return App\PollObject
     */
    public function object(){
        return $this->belongsTo('App\PollObject');
    }
}
