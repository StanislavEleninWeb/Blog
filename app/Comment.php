<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Find comment with parent
     * 
     * @return App\Comment
     */
    public function replyComments(){
        return $this->hasMany('App\Comment', 'parent_id')->orderBy('created_at', 'asc');
    }
    
    /**
     * Comment - Comment Vote relation 
     * 
     * @return App\CommentVote
     */
    public function likes(){
        return $this->hasMany('App\CommentVote')->where('like', 1);
    }
    
    /**
     * Comment - Comment Vote relation 
     * 
     * @return App\CommentVote
     */
    public function dislikes(){
        return $this->hasMany('App\CommentVote')->where('like', 0);
    }
    
}
