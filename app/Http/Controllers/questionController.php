<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class questionController extends Controller
{
    public function index(){
        $pertanyaan = Question::all();
        return view('pertanyaan.index', compact('pertanyaan'));
    }
 
    public function store(request $request, post $post){
    	$pertanyaan = Question::create([
    		'judul'=>$request['judul'],
    		'isi'=>$request['isi'],
    		'tag'=>$request['tag'],
    		'created_at'=>$request['created_at'],
    		'updated_at'=>$request['updated_at'],
    		'user_id'=>auth()->id()
    	]);

        return redirect('/pertanyaan');
    }

    public function create(){        
        return view('/pertanyaan/form');
    }

    public function show($id){
        $pertanyaan = Question::find($id);
        return view('jawaban.index', compact('pertanyaan'));
    }

}
