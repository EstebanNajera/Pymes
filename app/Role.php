<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    protected $fillanle = [
        'role',
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}
