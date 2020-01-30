<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    public function users(){

       return $this->hasOne('App\Users');

    }
}
