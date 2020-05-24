<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct(){

        $this->authorizeResource(Category::class);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = [];
        
        $data['categories'] = Category::orderBy('id', 'DESC');
        
        $data['parents'] = $data['categories']->where('parent_id', 0)->get();
                
        if(isset($request->title) && mb_strlen(trim($request->title)) > 2){
            $data['title'] = trim($request->title);
            $data['categories']->where('title', 'like', '%'.$data['title'].'%');
        }
        
        if(isset($request->active) && is_numeric($request->active)){
            $data['active'] = intval($request->active);
            $data['categories']->where('active', $data['active']);
        }
        
        if(isset($request->parent) && is_numeric($request->parent)){
            $data['parent'] = intval($request->parent);
            $data['categories']->where('parent_id', $data['parent']);
        }
        
        $data['categories'] = $data['categories']->paginate(20)->withQueryString()->onEachSide(2);
        
        return view('category.admin.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        Category::getHeaderCategories();
        return view('category.admin.show')->with(['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
