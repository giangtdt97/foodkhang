<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ultility extends Model
{
    public function services()
    {
        return $this->belongsToMany(Service::class,'ultility_service');
    }
}
