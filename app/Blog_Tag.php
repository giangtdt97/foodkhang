<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog_Tag extends Model
{
    protected $table = 'blog_tag';
    protected $fillable = ['blog_id', 'tag_id'];
}
