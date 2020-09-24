<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Service extends Model
{
    protected $table = 'order_service';
    protected $fillable = ['service_id', 'order_id'];
}
