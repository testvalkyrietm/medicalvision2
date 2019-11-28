<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Congress extends Model
{
    protected $fillable = ['title', 'slug', 'category_id'];
    public function media() {
        return $this->hasMany('App\Media');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
