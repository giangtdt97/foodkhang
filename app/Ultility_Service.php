<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ultility_Service extends Model
{
    protected $table = 'ultility_service';
    protected $fillable = ['ultility_id', 'service_id'];
}
