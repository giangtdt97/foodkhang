<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Category extends Model
{
    public function products()
    {
        return $this->belongsToMany(Product::class)->published();
    }
    public function productsFeature(){
        return $this->belongsToMany(Product::class)->published()->featured();
    }
    public function productsSignature(){
        return $this->belongsToMany(Product::class)->published()->signature();
    }
use Resizable;
}
