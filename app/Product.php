<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{

    const inStock = 'inStock';
    public function categories()
    {
        return $this->belongsToMany(Category::class,'category_product');
    }
    public function services()
    {
        return $this->belongsToMany(Service::class,'product_service');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class,'order_product')->published();
    }
    public function presentPrice()
    {
        return ''.number_format($this->price / 1000, 3);
    }
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(5);
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $extraFields = [
            'categories' => $this->categories->pluck('name')->toArray(),
        ];

        return array_merge($array, $extraFields);
    }


    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::inStock);
    }
    public function scopeFeatured(Builder $sql){
        return $sql->where('featured','=',1);
    }
    public function scopeSignature(Builder $sql){
        return $sql->where('signature','=',1);
    }
    use Resizable;
}
