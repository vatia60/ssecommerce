<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function showDetails($slug)
    {
       $data = [];
       $data['productdetails'] = Product::where('slug', $slug)->where('active', 1)->first();

       if($data['productdetails'] === null) {
        return redirect()->route('frontend.home');
       }
       return view('frontend.products.details', $data);
    }
}
