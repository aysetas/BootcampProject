<?php

namespace App\Http\Controllers;

use App\Models\order;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        if(!auth()->check()){
            return redirect()->route('users.login')
            ->with('message_type', 'info')
            ->with('message','Ödeme işlemi için oturum açmanız veya kayıt olmanız gerekir.');
        }
        else if(count(Cart::content())==0){
            return redirect()->route('homepage')
            ->with('message_type', 'info')
            ->with('message','Ödeme işlemi için sepetinizde bir ürün bulunmalıdır.');
        }
        $user_detail = auth()->user()->userDetail;
        return view('payment', compact('user_detail'));

    }
    public function payment(){ //Bankanın ödeme yapma kısmından sonra buraya yönlenir.
        $order = request()->all();
        $order['shopping_carts_id'] = session('active_shoppingcart_id');
        $order['bank'] = "Garanti";
        $order['installment_number'] = 1;
        $order['status'] = "Siparişiniz alındı";
        $order['order_amount'] = Cart::subtotal();

        order::create($order);
        Cart::destroy();
        session()->forget('active_shoppingcart_id');

        return redirect()->route('orders')
            ->with('message_type', 'success')
            ->with('message', 'Ödemeniz başarılı bir şekilde gerçekleştirildi.');
    }
}
