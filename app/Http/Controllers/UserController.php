<?php

namespace App\Http\Controllers;

use App\Mail\UserRegisterMail;
use App\Models\shoppingCart;
use App\Models\shoppingcartProduct;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login_form(){
        return view('users.login');
    }
    public function login(){
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $credentials = [
            'email'    => request('email'),
            'password' => request('password')

        ];
        if (auth()->attempt($credentials, request()->has('rememberme'))){
         request()->session()->regenerate();

         $active_shoppingcart_id=shoppingCart::active_shoppingcart_id();//veritabanındaki sepet idsini çektim.
         if(is_null($active_shoppingcart_id)){
            $active_shoppingcart=shoppingCart::create(['users_id'=>auth()->id()]);
            $active_shoppingcart_id=$active_shoppingcart->id;
         }


         session()->put('active_shoppingcart_id',$active_shoppingcart_id);                    //bunu session aktardım.
         if(Cart::count()>0){                                  //sessiondaki ürünleri veritabanında varsa güncelledik yoksa yoksa ekleme işlemi yaptım.
             foreach(Cart::content() as $cartItem){            //bu işlemleri yaparak veritabanındaki tüm işlemleri senkronize ettim.
                 shoppingcartProduct::updateOrCreate(          //yani sessionla veritabanını birleştirmiş oldum.
                     ['shopping_carts_id'=>$active_shoppingcart_id, 'products_id'=>$cartItem->id],
                     ['quantity'=>$cartItem->qty, 'price'=>$cartItem->price, 'position'=>'beklemede']
                 );

             }
         }
         Cart::destroy();                                    //sonra veritabanını boşalttım
         $shoppingcartproducts=shoppingcartProduct::where('shopping_carts_id', $active_shoppingcart_id)->get();//veritanındaki ürünleri sessiona tekrar ekledim.
         foreach($shoppingcartproducts as $shoppingcartproduct){
             Cart::add($shoppingcartproduct->Products->id, $shoppingcartproduct->Products->product_name, $shoppingcartproduct->quantity, $shoppingcartproduct->price,['slug'=>$shoppingcartproduct->Products->slug]);
         }
         return redirect()->intended('/');
        }


        else{
            $errors=['email'=>'Hatalı giriş'];
            return back()->withErrors($errors);
        }
    }

    public function register_form(){
        return view('users.register');
    }

    public function register(){

        $this->validate(request(), [
            'nameSurname' => 'required|min:5|max:60',
            'email'   => 'required|email|unique:users',
            'password'   => 'required|confirmed|min:5|max:15'
        ]);
       $user=User::create([
           'nameSurname' =>request('nameSurname'),
           'email'=> request('email'),
           'password'=> Hash::make(request('password')),
           'activation_key'=>Str::random(60),
           'active'=>0
           ]);


           Mail::to(request('email'))->send(new UserRegisterMail($user));


           auth()->login($user);
           return redirect()->route('homepage');
    }

    public function activate($key){
        $user=User::where('activation_key', $key)->first();

        if(!is_null($user)){
            $user->activation_key=null;
            $user->active=1;
            $user->save();
            return redirect()->route('homepage')
            ->with('message','Kullanıcı kaydenız aktifleştirildi')
            ->with('message_type','success');
        }
        else {
            return redirect()->toroute('homepage')
                ->with('message', 'Kullanıcı kaydınız aktifleştirilemedi')
                ->with('mesagge_type', 'warning');
        }
    }
    public function logout(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('homepage');
    }
}
