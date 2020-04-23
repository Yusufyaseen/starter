<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
	public function test1(){
		return view('test');
	} 
	public function test2(){
		return view('welcome');
	}
}
