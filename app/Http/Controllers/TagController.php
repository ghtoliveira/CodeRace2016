<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tag;
use Storage;
use Illuminate\Support\Facades\Input;

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


    public function upload(Request $request){
        Storage::disk('local')->makeDirectory('/23');//.$request->user()->id
        
        if(Input::hasFile('file')){
            $file = Input::file('file');
            $file->move('.././storage/app/'.$request->user()->id,$file->getClientOriginalName());
        }
    }
	
}
