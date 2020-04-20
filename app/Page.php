<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /**
     * Page - Position relation
     * 
     * @return App\Position
     */
    public function positions(){
        return $this->hasMany('App\Position');
    }
}
