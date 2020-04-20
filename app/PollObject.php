<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PollObject extends Model
{
    /**
     * PollObject - Poll relation ManyToOne
     * 
     * @return App\Poll
     */
    public function poll(){
        return $this->belongsTo('App\Poll');
    }
    
    /**
     * PollObject - PollVote relation OneToMany
     * 
     * @return App\PollVote
     */
    public function votes(){
        return $this->hasMany('App\PollVote');
    }
}
