<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Service extends Model
{
    protected $fillable = ['name','price','slug','image','images','short_description','description','featured'];
    public function products()
    {
        return $this->belongsToMany(Product::class,'product_service')->published();
    }
    public function ultilities()
    {
        return $this->belongsToMany(Ultility::class,'ultility_service');
    }
    public function presentPrice()
    {
        return ''.number_format($this->price / 1000, 3);
    }
    use Resizable;
}
