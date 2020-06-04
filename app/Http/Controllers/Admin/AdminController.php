<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $data = [];
        
        $data['mostViewed'] = [];
        $data['recentPosts'] = [];
        $data['recentComments'] = [];
        
        Mail::to(Auth::user())->send(new \App\Mail\OrderNotShipped());
        
        return view('home.admin.index')->with($data);
    }
}
