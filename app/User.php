<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = array('name', 'password');

    public function User(){
      return $this->belongsTo('App\User');
    }
}
