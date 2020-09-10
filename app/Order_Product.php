<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model
{
    protected $table = 'order_product';
    protected $fillable = ['product_id', 'order_id'];
}
