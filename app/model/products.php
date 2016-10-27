<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    public $table ="products";

    protected $fillable =[
        'product_name','category_name','product_code','product_description','product_price','product_image'
    ];
}
