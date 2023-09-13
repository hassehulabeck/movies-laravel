<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Director extends Model
{
    use HasFactory;
    public function movies(): HasMany
    {
        return $this->hasMany('App\Movie');
    }
}
