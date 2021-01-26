<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $list = Products::orderByDesc('id')->paginate(3);
        return view('yonetim.product.index', compact('list'));
    }
}
