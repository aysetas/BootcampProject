<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class shoppingCart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[]; //tablomuzda tüm alanların eklebilir olmasını sağlar
    
    public function order(){
       
        return $this->hasOne('App\Models\order');
    }

    public static function active_shoppingcart_id(){

        $active_shoppingcart = DB::table('shopping_carts as s')
            ->leftJoin('orders as or', 'or.shopping_carts_id', '=', 's.id')
            ->where('s.users_id', auth()->id())
            ->whereRaw('or.id is null')
            ->orderByDesc('s.created_at')
            ->select('s.id')
            ->first();

        if (!is_null($active_shoppingcart)) return $active_shoppingcart->id;
    }
  
    public function cart_product_quantity(){
       return DB::table('shoppingcart_products')
        ->whereRaw('deleted_at is null')
        ->where('shopping_carts_id', $this->id)
        ->sum('quantity');
       
    }
    
}
