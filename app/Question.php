<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $guarded = [];

    public function posting($request){
    	$pertanyaan = new question;
    	$pertanyaan->save();
    	return $pertanyaan;
    }
}
