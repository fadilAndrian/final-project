<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $guarded = [];
    

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function find_by_id($id){
    	$question = DB::table('questions')->where('id', $id)->first();
    	return $question;
    }
}
