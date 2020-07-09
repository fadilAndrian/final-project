<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class answerController extends Controller
{
	public function simpan(Request $request){
		$jawaban = App\answer::create([
			'isi'->$request['isi'],
			'create_time'->$request['create_time'],
			'update_time'->$request['update_time'],
			'user_id'->$request['user_id']
		]);
	}
}
