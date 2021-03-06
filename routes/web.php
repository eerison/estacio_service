<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('cotacao.form');
});

Route::get('/cotacao', ['uses' => 'CotacaoController@index', 'as' => 'cotacao.index']);
Route::post('/cotacao/cotar', ['uses' => 'CotacaoController@cotar', 'as' => 'cotacao.cotar']);
Route::post('/cotacao/solicitar', ['uses' => 'CotacaoController@solicitarPlano', 'as' => 'cotacao.solicitar']);