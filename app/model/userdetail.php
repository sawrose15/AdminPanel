<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class userdetail extends Model
{
   public $table ="userdetail";

    protected $fillable =[
        'name','username','password','department','reporting_to','email_address','phone_no','usertype'
    ];

    protected $hidden = [
        'password','remember_token'
    ];
}
