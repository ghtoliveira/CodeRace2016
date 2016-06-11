<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;

class TagController extends Controller
{
    

    public function postInserirTag(Request $request){
    	$tag = new Tag;
    	
    	$tag->descricao = $request->input('descTag');

    	$tag->save();
    	$tags = Tag::all();


    	return view ('tag\homeTag',array('tags'=>$tags));
    }

    public function getListTag(){
    	$tags = Tag::all();

    	return view ('tag\homeTag',array('tags'=>$tags));
    }

    public function getInserirTag(){
		
		return view('tag\adicionarTag');
	}

	
}
