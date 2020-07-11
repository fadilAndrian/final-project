<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $guarded = [];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
