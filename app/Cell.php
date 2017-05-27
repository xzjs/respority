<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    public function goods()
    {
        return $this->hasMany('App\Good');
    }
}
