<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class POST extends Model
{

    public $table = 'setpost';

    protected $primaryKey = 'postId';

    public function comments(){

      return $this->hasMany('App\Comment' , 'idpost' , 'postId');

    }

    public function student(){

      return $this->belongsTo('App\Student');

    }
}
