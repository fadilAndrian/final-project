<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class questionController extends Controller
{
    public function index(){
        $pertanyaan = Question::all();
        return view('pertanyaan.index', compact('questions'));
    }
 
    public function store(request $request){
    	$pertanyaan = Question::create([
    		'judul'->$request['judul'],
    		'isi'->$request['isi'],
    		'tag'->$request['tag'],
    		'create_time'->$request['create_time'],
    		'update_time'->$request['update_time'],
    		'user_id'->$request['user_id'],
    	]);

        return redirect('');
    }

    public function create(){        
        return view('');
    }
}
