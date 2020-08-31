<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carta;
use App\Producto;

class FrontendController extends Controller
{
    public function index(Request $request){
        $cartas = Carta::all();
        return view('welcome')->with(compact('cartas'));
    }

    public function producto(Request $request){
        $producto = Producto::findOrFail($request->producto);
        return view('producto')->with(compact('producto'));

    }
}
