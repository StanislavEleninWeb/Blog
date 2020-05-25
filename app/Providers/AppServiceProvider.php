<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use \Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        DB::listen(function ($query) {
             echo PHP_EOL.$query->sql.PHP_EOL;
//             $query->bindings
//             $query->time
        });
        
//        \App\Category::observe(\App\Observers\CategoryObserver::class);
    }
}
