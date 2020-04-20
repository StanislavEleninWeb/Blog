<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Tag - Post relation ManyToMany
     * 
     * @return App\Post
     */
    public function posts(){
        return $this->belongsToMany('App\Post', 'posts_tags');
    }
    
    /**
     * Image - Tag relation ManyToMany
     * 
     * @return App\Image
     */
    public function images(){
        return $this->belongsToMany('App\Image', 'images_tags');
    }
}
