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

    public function reviews()
    {
        return $this->hasMany('App\Models\Review', 'cafe_id', 'id');
    }
}
