<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($slug_products_name){
     $product=Products::whereSlug($slug_products_name)->firstorFail();
     return view('product',compact('product' ));

    }
}
