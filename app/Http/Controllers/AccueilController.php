<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    // to get home view
    public function getHome(){

        return view('accueil');
    }
}
