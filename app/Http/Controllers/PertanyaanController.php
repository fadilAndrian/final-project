<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    //
    public function index(){
    	$pertanyaan = PertanyaanModel::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }
 
    
}
