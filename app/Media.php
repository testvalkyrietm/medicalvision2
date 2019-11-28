<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['title', 'year', 'downloadPath', 'congress_id'];
    public function congress() {
        return $this->belongsTo('App\Congress');
    }
}
