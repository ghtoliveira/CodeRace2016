<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Produto as Produto;
use App\Tag as Tag;
use App\Categoria as Categoria;
use App\Condicao as Condicao;

class ProdutoController extends Controller
{
    


    public function postInserirProduto(Request $request){


		$tagId = Tag::all()->where('descricao', $request->input('tag'))->first()->id;
		$categoriaId = Categoria::all()->where('descricao', $request->input('categoria'))->first()->id;
		$condicaoId = Condicao::all()->where('descricao', $request->input('condicao'))->first()->id;
    		$produto = new Produto;

    		$produto->nome 			= $request->input('nome');
    		$produto->valor 		= $request->input('valor');
    		$produto->descricao 	= $request->input('descricao');
    		$produto->userId    	= $request->user()->id;
    		$produto->categoriaId 	= $categoriaId;
    		$produto->tagId       	= $tagId;
    		$produto->condicaoId   	= $condicaoId;

    		$produto->save();
    }

	public function getInserirProduto(){
		$tags = Tag::all();
		$condicoes = Condicao::all();
		$categorias = Categoria::all();

		return view('produto\adicionarProduto', array('tags' => $tags, 'condicoes' => $condicoes, 'categorias' => $categorias));
	}
}
