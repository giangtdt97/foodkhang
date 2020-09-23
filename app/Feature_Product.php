<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature_Product extends Model
{
    protected $table = 'feature_products';
    protected $fillable = ['product_name', 'description','image'];
}
