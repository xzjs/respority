<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cell extends Model
{
    public function good()
    {
        return $this->hasOne('App\Good');
    }
}
