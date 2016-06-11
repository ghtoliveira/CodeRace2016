<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Oferta as Oferta;
use App\User as User;
use App\Produto as Produto;

class OfertaController extends Controller
{
    public function getAdicionarOferta(){
        return view('oferta\adicionarOferta');
    }

    public function postAdicionarOferta(Request $request){
        $oferta = new Oferta;
        $produto = Produto::all()->where('id', 1)->first();

        //TODO: Adicionar valor à oferta
        $oferta->userId = $request->user()->id;
        //TODO: Conseguir passar vários ID's de produtos da view para o controller
        $oferta->titulo = $request->input('titulo');
        $oferta->valorMinimo = $request->input('valorMinimo');
        $oferta->valorMaximo = $request->input('valorMaximo');

        $oferta->save();


        $produto->ofertas()->attach($oferta->id);
        $oferta->produtos()->attach($produto->id);

        //TODO: Retornar view que ta tudo pronto

    }

    public function editar(){

    }
}

