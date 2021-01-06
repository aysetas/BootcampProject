<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug_categoryName){
        $categories=Categories::where('slug' ,$slug_categoryName)->firstOrFail();


        $lower_categories=Categories::where('top_id', $categories->id)->get();

        $products=$categories->products()->paginate(4);
       return view('category' ,compact('categories' ,'lower_categories' ,'products'));
    }



}
