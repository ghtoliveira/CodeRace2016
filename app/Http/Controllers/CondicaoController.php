<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Condicao;

class CondicaoController extends Controller
{
    

    public function getListCondicoes(){
		
		$condicoes = Condicao::all();

    	return view ('condicao\homeCondicao',array('condicoes'=>$condicoes));
    }

    public function getInserirCondicao(){
    	return view('condicao\adicionarCondicao');
    }

    public function postInserirCondicao(Request $request){
    	$condicao = new Condicao;
    	
    	$condicao->descricao = $request->input('descCond');

    	$condicao->save();
    	$condicoes = Condicao::all();

    	return view ('condicao\homeCondicao',array('condicoes'=>$condicoes));
    }
}
