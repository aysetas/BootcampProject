<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingcartController extends Controller
{
    public function index(){
        return view('shoppingCart');
    }
}
