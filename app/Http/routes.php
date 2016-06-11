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
