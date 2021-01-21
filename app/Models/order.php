<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class order extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=['shopping_carts_id','order_amount','status','bank','installment_number','nameSurname','address','phone','mobilephones'];

    public function shoppingCart(){
        return $this->belongsTo('App\Models\shoppingCart');
    }
}
