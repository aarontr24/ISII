<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pet;

class MainController extends Controller{
	public function home(){

		return view('main.home');
	}
	
	public function adopta(){

		$pets = Pet::latest()->simplePaginate(20);

		return view('main.adopta',["pets" => $pets]);
	}
}
