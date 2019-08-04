<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = ['username' , 'password'];

    protected $primaryKey = 'id';
 
    protected $table = 'students';

    public function hasposts(){

      return $this->hasMany('App\POST' , 'student_id' , 'id');

    }
}
