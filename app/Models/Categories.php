<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table='categories';
    protected $fillable=['categoryName' , 'slug'];

    public function categories(){
        return $this ->balongsToMany('App\Models\Categories' , 'category_products');
    }

}
