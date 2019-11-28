<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug'];
    public function congress() {
        return $this->hasMany('App\Congress');
    }

    public function getRouteKeyName() {
        return 'slug';
    }
}
