<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

use Cart;

class ShoppingcartController extends Controller
{
    public function index(){
        return view('shoppingCart');
    }
    public function add(){
        $product=Products::find(request('id'));

       Cart::add($product->id, $product->product_name, 1, $product->price, [ 'slug'=>$product->slug ]);


       return redirect()->route('shoppingCart')
       ->with('message_type','success')
       ->with('message','Ürün sepete eklendi.');

    }
    public function delete($rowId){
        Cart::remove($rowId);
        return redirect()->route('shoppingCart')
        ->with('message_type','danger')
        ->with('message','Ürün sepetten silindi.');

    }
    public function clear(){
        Cart::destroy();
        return redirect()->route('shoppingCart');
    }
}
