<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Feature_Image extends Model
{
    protected $table = 'feature_images';
    protected $fillable = ['value', 'order'];
    use Resizable;

}
