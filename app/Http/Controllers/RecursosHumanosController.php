<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecursosHumanosController extends Controller
{
   public function home(){

    	return view('RecursosHumanos.plantillarecursos');
    }
}
