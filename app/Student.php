<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    protected $fillable = ['Fname' , 'password'];

    protected $primaryKey = 'id';

    public function hasposts(){

      return $this->hasMany('App\POST' , 'student_Id' , 'id');

    }
}
