<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatetable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatetable
{
    use HasFactory;
    use SoftDeletes;
    protected $table="users";
    protected $fillable=['nameSurname','email','password','activation_key','active'];
    protected $hidden=['password','activation_key'];

    public function userDetail()
    {
        return $this->hasOne('App\Models\userDetail')->withDefault();
    }
}
