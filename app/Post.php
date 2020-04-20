<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Post - User relation ManyToOne
     * 
     * @return App\User
     */
    public function owner(){
        return $this->belongsTo('App\User', 'owner_id');
    }
    
    /**
     * Post - User relation ManyToOne
     * 
     * @return App\User
     */
    public function author(){
        return $this->belongsTo('App\User', 'author_id');
    }
    
    /**
     * Post - Category relation ManyToOne
     * 
     * @return App\Category
     */
    public function category(){
        return $this->belongsTo('App\Category');
    }
    
    /**
     * Post - View relation ManyToOne
     * 
     * @return App\View
     */
    public function view(){
        return $this->belongsTo('App\View');
    }
    
    /**
     * Post Position relation ManyToMany
     * 
     * @return App\Position
     */
    public function positions(){
        return $this->belongsToMany('App\Position', 'post_position_placement');
    }
    
    /**
     * Post - Comment relation OneToMany
     * 
     * @return App\Comment
     */
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    
    /**
     * Post - Tag relation ManyToMany
     * 
     * @return App\Tag
     */
    public function tags(){
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }
    
    /**
     * Post - Image relation ManyToMany
     * 
     * @return App\Image
     */
    public function images(){
        return $this->belongsToMany('App\Image', 'posts_images');
    }
}
