<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Pet;

use Alaouy\Youtube\Facades\Youtube;

class MainController extends Controller{
	public function home(){
		$videoId = Youtube::parseVidFromURL('https://www.youtube.com/watch?v=moSFlvxnbgk');
		return view('main.home',["videoId" => $videoId]);
	}
	
	public function adopta(){

		$pets = Pet::latest()->simplePaginate(20);

		return view('main.adopta',["pets" => $pets]);
	}

	public function weare(){

		return view('main.conocenos');
	}

	public function donation(){

		return view('main.donation');
	}

	public function question(){

		return view('main.question');
	}
}
