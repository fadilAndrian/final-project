<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class questionController extends Controller
{
    public function simpan(request $request){
    	$pertanyaan = App\question::create([
    		'judul'->$request['judul'],
    		'isi'->$request['isi'],
    		'tag'->$request['tag'],
    		'create_time'->$request['create_time'],
    		'update_time'->$request['update_time'],
    		'user_id'->$request['user_id'],
    	]);
    }
}
