<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Produto;

class ProdutoController extends Controller
{
    


    public postInserirProduto(Request $request){

    		$produto = new Produto;

    		$produto->nome 			= $request->input('nome');
    		$produto->valor 		= $request->input('valor');
    		$produto->descricao 	= $request->input('descricao');
    		$produto->userId    	= $request->user()->id;
    		$produto->categoriaId 	= $request->input('categoriaId');
    		$produto->tagId       	= $request->input('tagId');
    		$produto->condicaoId   	= $request->input('condicaoId');

    		$produto->save();
    }
}
