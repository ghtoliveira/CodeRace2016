<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Auth as Auth;

class UsuarioController extends Controller
{
    public function getListarOfertas(Request $request){
        $usuario = $request->user();
        $ofertas = $usuario->ofertas;



        return view('usuario\listarOfertas', array('ofertas' => $ofertas));
    }
}
