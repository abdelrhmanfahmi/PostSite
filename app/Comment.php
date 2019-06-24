<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';

    protected $primaryKey = 'commentId';

    protected $fillable = ['comment'];

    public function posts(){

      return $this->belongsTo('App\POST');

    }

}
