<?php

namespace App\Http\Controllers;

use Illunimate\Http\Request;

use App\Http\Requests;

class MainController extends Controller{
	public function home(){
		return view('main.home',[]);
	}
}