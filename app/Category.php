<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 
 	/**
     * Category Post relation OneToMany
     * 
     * @return App\Post
     */   
	public function posts(){
		return $this->hasMany('App\Post');
	}

}
