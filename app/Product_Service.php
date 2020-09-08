<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_Service extends Model
{
    protected $table = 'product_service';
    protected $fillable = ['product_id', 'service_id'];
}
