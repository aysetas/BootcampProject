<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class shoppingcartProduct extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded=[]; //tablomuzda tüm alanların eklebilir olmasını sağlar

    public function Products(){
        return $this->belongsTo('App\Models\Products');
    }
}
