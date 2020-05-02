<?php

namespace App\Http\Middleware;

use Closure;
use App\Providers\RouteServiceProvider;

class Admin
{

    private $admin = [
        'admin',
        'owner',
        'developer'
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        foreach ($request->user()->roles as $key => $value) {
            if(array_search($value->slug, $this->admin)){
                return $next($request);
            }
        }

        return redirect(RouteServiceProvider::HOME)->with('error', 'Do not have credentials!');
    }
}
