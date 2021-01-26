<?php

namespace App\Http\Controllers\Yonetim;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $list =Categories ::orderByDesc('id')->paginate(8);
        return view('yonetim.category.index', compact('list'));
    }
}
