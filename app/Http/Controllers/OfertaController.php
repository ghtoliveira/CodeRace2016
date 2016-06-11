<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Oferta as Oferta;
use App\User as User;
use App\Produto as Produto;
use Illuminate\Support\Facades\Auth;

class OfertaController extends Controller
{
    public function getAdicionarOferta(){
        $categorias = Categoria::all();
        $produtos = Auth::user()->produtos;
        return view('oferta\adicionarOferta', array('categorias' => $categorias, 'produtos' => $produtos));
    }

    public function postAdicionarOferta(Request $request){
        $categorias = $request->input('categoriaId');
        $produtos = $request->input('produtos');
        $oferta = new Oferta;

        //TODO: Adicionar valor à oferta
        $oferta->userId = $request->user()->id;
        //TODO: Conseguir passar vários ID's de produtos da view para o controller
        $oferta->titulo = $request->input('titulo');
        $oferta->valorMinimo = $request->input('valorMinimo');
        $oferta->valorMaximo = $request->input('valorMaximo');
        $oferta->valor = $request->input('valor');

        $oferta->save();




        foreach($categorias as $categoria) {
            $oferta->categorias()->attach($categoria);
        }

        foreach($produtos as $produto){
            $oferta->produtos()->attach($produto);
        }


        //TODO: Retornar view que ta tudo pronto

    }

    public function getListarRelacionadas($id){
        $id = (int) $id;
        $oferta = Oferta::all()->where('id', $id)->first();


        $valorMinimo = (int) $oferta->valorMinimo;
        $valorMaximo = (int) $oferta->valorMaximo;

        $ofertas = Oferta::all();
        $ofertaValor = array();
        foreach($ofertas as $oferta)
            if($oferta->valor >= $valorMinimo && $oferta->valor <= $valorMaximo)
                $ofertaValor[] = $oferta;

        //TODO: Filtrar as ofertas que tiverem interesse na mesma categoria
        return view('oferta\listarRelacionadas', array('ofertas' => $ofertaValor));
    }

    public function getOfertaDetalhe($id){
        $oferta = Oferta::all()->where('id', $id)->first();

        //TODO: Return view com os detalhes(criar ainda)
    }
}

