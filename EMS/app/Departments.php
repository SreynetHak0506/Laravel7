<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departments extends Model
{ 

    // protected $fillable = [
    //     'department',
    //     'note',     
    // ];
    public function departments(){
        return $this->hasMany('App\Employees');
    }
}
