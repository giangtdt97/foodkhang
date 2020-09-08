<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['name','price','slug','image','images','short_description','description','featured'];
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_service');
    }
}
