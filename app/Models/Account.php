<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Account extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $fillable = [
        'name','age','email','username','password','profile','bio'
    ];
}
