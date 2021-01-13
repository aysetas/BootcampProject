<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

use App\Models\Products;

class HomeController extends Controller
{
    public function index(){

        $categories=Categories::whereRaw('top_id is null')->take(81)->get();
        $product_slider=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_slider' ,1)
        ->orderBy('updated_at' ,'desc')
        ->take(3)->get();
        $product_opportunity_day=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_opportunity_day' ,1)
        ->orderBy('updated_at' ,'desc')
        ->take(9)->get();

        $product_featured=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_featured' ,1)
        ->orderBy('updated_at' ,'desc')
        ->take(8)->get();
        $featured=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_featured' ,1)
        ->orderBy('updated_at' ,'desc')
        ->first();

        $product_bestseller=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_bestseller' ,1)
        ->orderBy('updated_at' ,'desc')
        ->take(9)->get();
        $product_discounted=Products::select('products.*')
        ->join('product_details','product_details.products_id','products.id')
        ->where('product_details.show_discounted' ,1)
        ->orderBy('updated_at' ,'desc')
        ->take(3)->get();

        return view('homepage' ,compact('categories','featured','product_slider','product_opportunity_day','product_featured','product_bestseller','product_discounted'));

    }

}

