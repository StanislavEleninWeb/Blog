<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    /**
     * Position - Page relation
     * 
     * @return App\Page
     */
    public function page(){
        return $this->belongsTo('App\Page');
    }
    
    /**
     * Position - Post relation
     * 
     * @return App\Post
     */
    public function posts(){
        return $this->belongsToMany('App\Post', 'post_position_placement');
    }
}
