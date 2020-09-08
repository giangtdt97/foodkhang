<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Product extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function categoryid()
    {
        return $this->belongsToMany(Category::class);
    }
    public function presentPrice()
    {
        return money_format('$%i', $this->price / 100);
    }
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }
    public function toSearchableArray()
    {
        $array = $this->toArray();

        $extraFields = [
            'categories' => $this->categories->pluck('name')->toArray(),
        ];

        return array_merge($array, $extraFields);
    }
    const inStock = 'inStock';

    public function scopeInStock(Builder $query)
    {
        return $query->where('status', '=', static::inStock);
    }
    use Resizable;
}
