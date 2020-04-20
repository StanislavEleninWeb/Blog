<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    /**
     * Poll - Page relation ManyToOne
     * 
     * @return App\Page
     */
    public function page(){
        return $this->belongsTo('App\Page');
    }
    
    /**
     * Poll - PollObject relation OneToMany
     * 
     * @return App\PollObject
     */
    public function objects(){
        return $this->hasMany('App\PollObject');
    }
}
