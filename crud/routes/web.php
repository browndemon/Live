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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/produtos', 'ProdutosController@index');
Route::get('/produto/cadastrar', 'ProdutosController@cadastro');
Route::post('/cadastrar', 'ProdutosController@cadastrar');
Route::get('/produto/atualizar/{id}', 'ProdutosController@atualizar');
Route::post('/atualizar/{id}', 'ProdutosController@atualizando');
Route::get('/deletar/{id}', 'ProdutosController@deletar');