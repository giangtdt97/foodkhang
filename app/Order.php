<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{


    protected $searchable = [
        'phone_number'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    public function services()
    {
        return $this->belongsToMany(Service::class,'order_service');
    }
}
