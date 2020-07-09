<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table="answers";
    protected $guarded = [];

    public function posting($request){
		$jawaban = new answer;
		$jawaban->save();
		return $jawaban;
	}
}
