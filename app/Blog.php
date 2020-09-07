<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Blog extends Model
{
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    protected $fillable = [
        'author_id',
        'title',
        'seo_title',
        'excerpt',
        'body',
        'image',
        'slug',
        'meta_description',
        'meta_keyword',
        'status',
        'featured'
    ];

    const PUBLISHED = 'PUBLISHED';

    public function scopePublished(Builder $query)
    {
        return $query->where('status', '=', static::PUBLISHED);
    }
    use Resizable;
}
