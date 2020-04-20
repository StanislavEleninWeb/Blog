<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    /**
     * Image - Post relation ManyToMany
     * 
     * @return App\Post
     */
    public function posts(){
        return $this->belongsToMany('App\Post', 'posts_images');
    }
    
    /**
     * Image - Tag relation ManyToMany
     * 
     * @return App\Tag
     */
    public function tags() {
        return $this->belongsToMany('App\Tag', 'images_tags');
    }
}
