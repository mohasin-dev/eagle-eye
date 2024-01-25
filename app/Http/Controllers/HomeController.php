<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\category;
use App\Subcategory;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         //$categories = Category::all();
         //$subcategories = Subcategory::all();
         //$products = Product::all();
        return view('frontend.pages.home');
    }

    public function about()
    {
         //$categories = Category::all();
         //$subcategories = Subcategory::all();
         //$products = Product::all();
        return view('frontend.pages.about');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function knitProduct()
    {
        return view('frontend.pages.product.knitProduct');
    }
    public function schoolProduct()
    {
        return view('frontend.pages.product.schoolProduct');
    }
    public function wovenProduct()
    {
        return view('frontend.pages.product.wovenProduct');
    }
    public function safetyProduct()
    {
        return view('frontend.pages.product.safetyProduct');
    }
    public function fleeceProduct()
    {
        return view('frontend.pages.product.fleeceProduct');
    }
    public function productRange()
    {
        return view('frontend.pages.productRange');
    }
    public function ourStrength()
    {
        return view('frontend.pages.ourStrength');
    }
    public function operation()
    {
        return view('frontend.pages.operation');
    }
    public function qualityControl()
    {
        return view('frontend.pages.qualityControl');
    }
    public function privacy()
    {
        return view('frontend.pages.privacy');
    }
    public function terms()
    {
        return view('frontend.pages.terms');
    }
    public function support()
    {
        return view('frontend.pages.support');
    }
    public function carrer()
    {
        return view('frontend.pages.carrer');
    }
    public function ourConcerns()
    {
        return view('frontend.pages.ourConcerns');
    }

    public function show($slug)
    {
        // $categories = Category::all();
        // $subcategories = Subcategory::all();
         //$product = Product::where('slug', $slug)->first();
        //return view('frontend.pages.product-details', compact('slug', 'product'));
    }
}
