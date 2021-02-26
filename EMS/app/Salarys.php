<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salarys extends Model
{
    public function employee(){
        return $this->belongsTo('App\Employees');
    }
}
