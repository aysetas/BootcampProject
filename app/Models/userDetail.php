<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    use HasFactory;
    protected $table= "user_details";
    public $timestamps = false;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
