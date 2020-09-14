<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    use FullTextSearch;
    protected $searchable = [
        'phone_number'
    ];
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
