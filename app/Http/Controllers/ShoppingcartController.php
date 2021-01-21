<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\shoppingCart;
use App\Models\shoppingcartProduct;
use Illuminate\Http\Request;

use Cart;


class ShoppingcartController extends Controller
{
    public function index(){
        return view('shoppingCart');
    }
    public function add(){
        $product=Products::find(request('id'));

      $cartItem=Cart::add($product->id, $product->product_name, 1, $product->price, [ 'slug'=>$product->slug ]);

        if(auth()->check()){ //kullanıcı giriş yapmışsa sepetteki verileri veritabanına ekleyen kod.
            $active_shoppingcart_id=session('active_shoppingcart_id');

            if(!isset($active_shoppingcart_id)){
                $active_shoppingcart=shoppingCart::create([
                    'users_id'=>auth()->id()
                ]);
                $active_shoppingcart_id=$active_shoppingcart->id;
                session()->put('$active_shoppingcart_id' , $active_shoppingcart_id);
            }
            shoppingcartProduct::updateOrCreate(
                ['shopping_carts_id'=>$active_shoppingcart_id, 'products_id'=>$product->id],
                ['quantity'=>$cartItem->qty, 'price'=>$product->price,'position'=>'beklemede']
            );
        }

       return redirect()->route('shoppingCart')
       ->with('message_type','success')
       ->with('message','Ürün sepete eklendi.');

    }
    public function delete($rowId){

        if(auth()->check()){ //kullanıcı giriş yapmışsa sepetteki verileri veritabanına ekleyen kod.
            $active_shoppingcart_id=session('active_shoppingcart_id');
            $cartItem=Cart::get($rowId);
            shoppingcartProduct::where('shopping_carts_id',$active_shoppingcart_id)->where('products_id',$cartItem->id)->delete();
        }
        Cart::remove($rowId);
        return redirect()->route('shoppingCart')
        ->with('message_type','danger')
        ->with('message','Ürün sepetten silindi.');

    }
    public function clear(){
        if(auth()->check()){ //kullanıcı giriş yapmışsa sepetteki verileri veritabanına ekleyen kod.
            $active_shoppingcart_id=session('active_shoppingcart_id');
            shoppingcartProduct::where('shopping_carts_id',$active_shoppingcart_id)->delete();
        }
        Cart::destroy();
        return redirect()->route('shoppingCart');
    }
    public function update($rowId ){
        if(auth()->check()){ //kullanıcı giriş yapmışsa sepetteki verileri veritabanına ekleyen kod.
            $active_shoppingcart_id=session('active_shoppingcart_id');
            $cartItem=Cart::get($rowId);

            if(request('quantity')==0)
                shoppingcartProduct::where('shopping_carts_id',$active_shoppingcart_id)->where('products_id',$cartItem->id)->delete();

            else
                shoppingcartProduct::where('shopping_carts_id',$active_shoppingcart_id)->where('products_id',$cartItem->id)
                ->update(['quantity'=>request('quantity')]);


        }

        Cart::update($rowId , request('quantity'));
        session()->flash('message_type', 'success');
        session()->flash('message', 'Miktar bilgisi güncellendi');

        return response()->json(['success'=>true]);
    }
}
