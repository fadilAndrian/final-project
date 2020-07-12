<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;

class answerController extends Controller
{
	public function store(Request $request){
		$jawaban = Answer::create([
			'isi'->$request['isi'],
			'create_time'->$request['create_time'],
			'update_time'->$request['update_time'],
			'user_id'->$request['user_id']
		]);
	}

	public function create(){
		//
	}

	public function index(){
		$answer = Answer::all();
        return view('jawaban.index', compact('answer'));
	}
}
