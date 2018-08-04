<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sectionController extends Controller
{
    //http://localhost:8000/library
    public function index() {
    	$date = date('Y-M-D');
    	$time = date('H:i:s');

    	return view('libraryView.library',compact('date','time'));

    }
    //http://localhost:8000/library/python
    public function show($section){
    	return '<center><h1>you can show this section = '.$section.'</h1></center>';
    }
    //http://localhost:8000/library/python/edit
    public function edit($section){
    	return '<center><h1>you can edit this section ='.$section.' </h1></center>';
    }
}
