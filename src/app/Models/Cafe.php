<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cafe extends Model
{
    protected $table = 'cafes';

    public function images()
    {
        return $this->hasMany('App\Models\CafeImages', 'cafe_id', 'id');
    }
}
