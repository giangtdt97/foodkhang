<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature_Image extends Model
{
    protected $table = 'feature_images';
    protected $fillable = ['value', 'order'];
}
