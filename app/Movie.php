<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function actors()
    {
        return $this->belongsToMany('App\Actor');
    }

    public function director()
    {
        return $this->belongsTo('App\Director');
    }
}
