<?php

namespace App;

use Illuminate\Database\Eloquent;

class FontAwesome extends Model
{
    public function service()
    {
        return $this->hasMany('App\Service');
    }

    public function why()
    {
        return $this->hasMany('App\Why');
    }
}
