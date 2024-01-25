<?php

namespace App\Http\Controllers\Admin;


use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Product;
use App\Subcategory;
use App\Productimage;
use App\Brand;
use App\Unit;
use App\Size;
use App\Color;
use App\Tag;
use File;
use Image;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $tags = Tag::all();

        return view('backend.product.create', compact('subcategories', 'brands', 'sizes', 'colors', 'tags', 'units'));
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
            'title' => 'required',
            'front_image' => 'required',
            'subcategory_id' => 'required',
            'tags' => 'required',
            'colors' => 'required',
            'sizes' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',
            'stock' => 'required',
            'images' => 'required',

        ]);
        $image = $request->file('image');
        $slug = str_slug($request->title);
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('front_image')) {
            $image = $request->file('front_image');
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/product/front_image/'.$filename);
            Image::make($image)->resize(255, 291)->save($location);
        }else{
            $filename = 'default.png';
        }

        $product = new product();
        $product->added_by = Auth::id();
        $product->title = $request->title;
        $product->slug = $slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->purchase_price = $request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->front_image = $filename;
        $product->discount_type = $request->discount_type;
        if(isset($request->is_featured))
        {
            $product->is_featured = true;
        }else {
            $product->is_featured = false;
        }
        if(isset($request->is_discount))
        {
            $product->is_discount = true;
        }else {
            $product->is_discount = false;
        }
        $product->save();

        if(count($request->images) > 0){
            foreach ($request->images as $gallery_image) {
                $img = $slug.'-'.$currentDate.'-'.uniqid().'.'.$gallery_image->getClientOriginalExtension();
                $location = public_path('images/product/gallery_image/'.$img);
                Image::make($gallery_image)->save($location);

                $productimg = new Productimage();
                $productimg->product_id = $product->id;
                $productimg->image = $img;
                $productimg->save();
            }
        }

        $product->tags()->attach($request->tags);
        $product->colors()->attach($request->colors);
        $product->sizes()->attach($request->sizes);

        Toastr::success('product Successfully Saved :)','Success');
        return redirect()->route('admin.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $subcategories = Subcategory::all();
        $brands = Brand::all();
        $units = Unit::all();
        $sizes = Size::all();
        $colors = Color::all();
        $tags = Tag::all();

        return view('backend.product.edit', compact('subcategories', 'brands', 'sizes', 'colors', 'tags', 'units', 'product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->validate($request,[
            'title' => 'required',
            'front_image' => 'required',
            'subcategory_id' => 'required',
            'tags' => 'required',
            'colors' => 'required',
            'sizes' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'purchase_price' => 'required',
            'sale_price' => 'required',
            'stock' => 'required',
            'images' => 'required',

        ]);
        $slug = str_slug($request->title);
        $currentDate = Carbon::now()->toDateString();
        if ($request->hasFile('front_image')) {
            if(File::exists('images/product/front_image/' .$product->front_image)){
                File::delete('images/product/front_image/' .$product->front_image);
            }
            $image = $request->file('front_image');
            $filename = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            $location = public_path('images/product/front_image/'.$filename);
            Image::make($image)->resize(255, 291)->save($location);
        }else{
            $filename = 'default.png';
        }

        $product->added_by = Auth::id();
        $product->title = $request->title;
        $product->slug = $slug;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->purchase_price = $request->purchase_price;
        $product->sale_price = $request->sale_price;
        $product->brand_id = $request->brand_id;
        $product->unit_id = $request->unit_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->front_image = $filename;
        $product->discount_type = $request->discount_type;
        if(isset($request->is_featured))
        {
            $product->is_featured = true;
        }else {
            $product->is_featured = false;
        }
        if(isset($request->is_discount))
        {
            $product->is_discount = true;
        }else {
            $product->is_discount = false;
        }
        $product->save();

        if(count($request->images) > 0){
            foreach ($product->images as $item){
                if(File::exists('images/product/gallery_image/' .$item->image)){
                    File::delete('images/product/gallery_image/' .$item->image);
                }
            }
            foreach ($request->images as $gallery_image) {
                $img = $slug.'-'.$currentDate.'-'.uniqid().'.'.$gallery_image->getClientOriginalExtension();
                $location = public_path('images/product/gallery_image/'.$img);
                Image::make($gallery_image)->save($location);

            }
        }

        $product->tags()->attach($request->tags);
        $product->colors()->attach($request->colors);
        $product->sizes()->attach($request->sizes);

        Toastr::success('product Successfully Updated :)','Success');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if(File::exists('images/product/front_image/' .$product->front_image)){
            File::delete('images/product/front_image/' .$product->front_image);
        }


        $product->tags()->detach();
        $product->colors()->detach();
        $product->sizes()->detach();
        $product->delete();
        Toastr::success('product Successfully Deleted :)','Success');
        return redirect()->back();
    }
}
