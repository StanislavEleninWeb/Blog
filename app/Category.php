<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use App\Scopes\ActiveScope;
use App\Events\CategorySaved;

class Category extends Model {

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'retrieved' => CategorySaved::class,
    ];

    /**
     * Category parent
     * 
     * @return App\Category
     */
    public function parent() {
        return $this->hasOne('App\Category', 'id', 'parent_id');
    }

    /**
     * 
     * @return App\Category
     */
    public function children() {
        return $this->hasMany('App\Category', 'parent_id', 'id')->orderBy('position', 'asc');
    }

    /**
     * Category Post relation OneToMany
     * 
     * @return App\Post
     */
    public function posts() {
        return $this->hasMany('App\Post');
    }

    /**
     * Header Categories
     * 
     * @return collection
     */
    public static function getHeaderCategories() {
        if (Cache::has('headerCategories')) {
            $nav = json_decode(Cache::get('headerCategories'));
        } else {
            $nav = static::with('children')->where('parent_id', 0)->where('active', 1)->where('header', 1)->get();
            Cache::put('headerCategories', json_encode($nav), 4800);
        }

        return $nav;
    }

    /**
     * Footer Categories
     * 
     * @return collection
     */
    public static function getFooterCategories() {
        if (Cache::has('footerCategories')) {
            $nav = json_decode(Cache::get('footerCategories'));
        } else {
            $nav = static::with('children')->where('parent_id', 0)->where('active', 1)->where('footer', 1)->get();
            Cache::put('footerCategories', json_encode($nav), 4800);
        }

        return $nav;
    }

    /**
     * Global Scopes like soft delete.
     *
     * @return void
     */
//    protected static function booted(){
//        static::addGlobalScope(new ActiveScope);
//    }

    /**
     * Local scope active
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query) {
        return $query->where('active', 1);
    }

    /**
     * Local scope header
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHeader($query) {
        return $query->where('header', 1);
    }

    /**
     * Local scope footer
     * 
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFooter($query) {
        return $query->where('footer', 1);
    }

}
