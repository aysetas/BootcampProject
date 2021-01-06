<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['categoryName' , 'slug'];


    public function products(){
        return $this ->belongsToMany('App\Models\Products' , 'category_products');
    }

}
