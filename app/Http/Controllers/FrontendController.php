<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carta;

class FrontendController extends Controller
{
    public function index(Request $request){
        $cartas = Carta::all();
        return view('welcome')->with(compact('cartas'));
    }
}
