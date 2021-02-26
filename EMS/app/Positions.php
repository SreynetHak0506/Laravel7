<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positions extends Model
{
    
    public function positions(){
        return $this->hasMany('App\Employees');
    }
}
