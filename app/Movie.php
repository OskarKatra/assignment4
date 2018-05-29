<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }
}
