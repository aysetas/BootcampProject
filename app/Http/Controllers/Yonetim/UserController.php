<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function login(){

        if (request()->isMethod('POST')) {
            $this->validate(request(), [
                'email' => 'required|email',
                'sifre' => 'required'
            ]);

            $credentials = [
                'email'       => request()->get('email'),
                'password'    => request()->get('password'),
                'admin' => 1,
                'active'    => 1
            ];

            if (Auth::guard('yonetim')->attempt($credentials, request()->has('benihatirla'))) {
                return redirect()->route('yonetim.homepage');
            } else {
                return back()->withInput()->withErrors(['email' => 'Giriş hatalı!']);
            }
        }

        return view('yonetim.login');
    }
    public function logout(){
        Auth::guard('yonetim')->logout();
        return redirect()->route('homepage');
    }
    public function index(){

        $list = User::orderByDesc('created_at')->paginate(3);
        return view('yonetim.users.index', compact('list'));
    }
}
