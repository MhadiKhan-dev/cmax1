<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
  public function users(){

     return $this->hasOne('App\Users');

  }
}
