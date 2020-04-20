<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentVote extends Model
{
    /**
     * CommentVote - Comment relation ManyToOne
     * 
     * @return App\Comment
     */
    public function comment(){
        return $this->belongsTo('App\Comment');
    }
}
