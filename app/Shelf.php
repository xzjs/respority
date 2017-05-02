<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shelf extends Model
{
    public function floors()
    {
        return $this->hasMany('App\Floor');
    }
}
