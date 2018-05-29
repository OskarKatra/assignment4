<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    public function cinema()
    {
        return $this->belongsTo('App\Cinema');
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
