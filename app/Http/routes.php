<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/adicionar/produto', array(
    'as' => 'postAdicionarProduto',
    'uses' => 'ProdutoController@postInserirProduto',
));

Route::get('/adicionar/novoProduto', array(
    'as' => 'getAdicionarProduto',
    'uses' => 'ProdutoController@getInserirProduto',
));


Route::get('/oferta/adicionar', array(
    'as' => 'getAdicionarOferta',
    'uses' => 'OfertaController@getAdicionarOferta'
));

Route::post('/oferta/adicionarNova', array(
   'as' => 'postAdicionarOferta',
    'uses' => 'OfertaController@postAdicionarOferta'
));

Route::get('/usuario/ofertas', array(
   'as' => 'getUsuarioOfertas',
    'uses' => 'UsuarioController@getListarOfertas'
));


// Tags
Route::get('/tag/home',array(
	'as' => 'listarTags',
	'uses' => 'TagController@getListTag',
));

Route::get('/adicionar/novaTag',array(
	'as' => 'getAdicionarTag',
	'uses' => 'TagController@getInserirTag',
));

Route::post('/adicionar/tag',array(
	'as' => 'postAdicionarTag',
	'uses' => 'TagController@postInserirTag',
));

// Condicao

Route::get('/condicao/home',array(
	'as' => 'listarCondicoes',
	'uses' => 'CondicaoController@getListCondicoes',
));

Route::get('/adicionar/novaCondicao', array(
	'as' => 'getAdicionarCondicao',
	'uses' => 'CondicaoController@getInserirCondicao'
));

Route::post('/adicionar/condicao',array(
	'as' => 'postAdicionarCondicao',
	'uses' => 'CondicaoController@postInserirCondicao',
));



