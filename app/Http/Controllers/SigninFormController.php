<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninFormController extends Controller
{
	//
	public function getSigninForm() {

		return view('signinForm');
	}
}
