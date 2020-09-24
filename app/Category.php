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
use Resizable;
}
