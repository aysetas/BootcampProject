<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table='products';

    protected $fillable=['products_name','slug','content','price'];

    public function categories(){
        return $this ->belongsToMany('App\Models\Categories' , 'category_products');
    }


    public function detail(){

        return $this->hasOne('App\Models\ProductDetails');
    }

}
