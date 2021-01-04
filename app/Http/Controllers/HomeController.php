<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\ProductDetails;
use App\Models\Products;

class HomeController extends Controller
{
    public function index(){

        $categories=Categories::whereRaw('top_id is null')->take(81)->get();
        $product_slider=ProductDetails::with('getProduct')->where('show_slider', 1)->take(3)->get();
        $show_opportunity_day=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_opportunity_day' ,1)
        ->orderBy('updated_at' ,'desc')
        ->first();

        $product_featured=ProductDetails::with('getProduct')->where('show_featured', 1)->take(9)->get();
        $product_bestseller=ProductDetails::with('getProduct')->where('show_bestseller', 1)->take(9)->get();
        $product_discounted=ProductDetails::with('getProduct')->where('show_discounted', 1)->take(9)->get();
        return view('homepage' ,compact('categories','product_slider','show_opportunity_day','product_featured','product_bestseller','product_discounted'));
    }
}
