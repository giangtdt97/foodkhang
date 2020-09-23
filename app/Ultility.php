<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Resizable;

class Ultility extends Model
{
    public function services()
    {
        return $this->belongsToMany(Service::class,'ultility_service');
    }
    use Resizable;
}
