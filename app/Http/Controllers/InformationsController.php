<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformationsController extends Controller
{
	//
	public function getInformations() {
		
		return view('informations');
	}
}
