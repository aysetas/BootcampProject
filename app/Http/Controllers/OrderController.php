<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = order::with('shoppingCart')
        ->orderByDesc('created_at')->get();
        return view('order', compact('orders'));
        
    }
   
}
