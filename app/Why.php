<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Why extends Model
{
    public function icon()
    {
        return $this->belongsTo('App\FontAwesome');
    }
}
