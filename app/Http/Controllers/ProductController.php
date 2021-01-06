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

    public function search(){

        $aranan=request()->input('aranan');

        $products=Products::where('product_name' ,'like' ,"%{$aranan}%")
        ->orWhere('content', 'like' ,"%{$aranan}%")
        ->paginate(4);

        request()->flash();  //aranan ismi oturum içinde bir kere saklar
        return view('search',compact('products'));

    }
}
