<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('backend.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:categories',
            //'url' => 'required|unique:categories',
            //'image' => 'required|image|mimes:jpeg,bmp,png,jpg,gif'
        ]);


        $subcategory = new Subcategory();
        $subcategory->name = $request->name;
        $subcategory->slug = str_slug($request->name);
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        Toastr::success('subcategory Successfully Saved :)' ,'Success');
        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories = Category::all();
        return view('backend.subcategory.edit', compact('subcategory', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $this->validate($request,[
            'name' => 'required',
            // 'url' => 'required',
            // 'image' => 'required|image|mimes:jpeg,bmp,png,jpg,gif'
        ]);

        $subcategory->name = $request->name;
        $subcategory->slug = str_slug($request->name);
        $subcategory->category_id = $request->category_id;
        $subcategory->save();
        Toastr::success('subcategory Successfully Updated :)' ,'Success');
        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        $subcategory->delete();
        Toastr::success('subcategory Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
