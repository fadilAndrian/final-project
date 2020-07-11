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
    public function create(){
        return view('pertanyaan.form');
    }
 
    public function store(request $request){
    	$new_pertanyaan = new question;
        $new_pertanyaan ->judul = $request->judul;
        $new_pertanyaan ->isi = $request->isi;
        $new_pertanyaan ->tag = $request->tag;
        //$new_pertanyaan ->create_time = $request->create_time;
        //$new_pertanyaan ->update_time = $request->update_time;

       $new_pertanyaan->save();
       return redirect('/dash');
    }
    

    
}
