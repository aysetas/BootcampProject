<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetails extends Model
{
    use HasFactory;

    protected $table='product_details';
    public $timestamps=false;
    protected $fillable=['products_id' , 'show_slider','show_opportunity_day','show_featured','show_bestseller','show_discounted'];

    public function getProduct(){

        return $this->belongsTo('App\Models\Products','products_id');
    }
}
