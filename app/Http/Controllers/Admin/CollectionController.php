<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index(){
        $collection = collect(['taylor', 'alex', null])->map(function($value){
            return strtoupper($value);
        })->reject(function($value){
            return empty($value);
        });
    }
}
