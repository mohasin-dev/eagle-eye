<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Brian2694\Toastr\Facades\Toastr;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('backend.dashboard', compact('products'));
    }
}
