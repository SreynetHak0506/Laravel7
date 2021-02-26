<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
   
    public function position(){
        return $this->belongsTo('App\Positions');
    }
    public function department(){
        return $this->belongsTo('App\Departments');
    }
    public function salary(){
        return $this->hasMany('App\Salarys');
    }
}
