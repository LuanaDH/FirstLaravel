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

Route::get('/', function () {   /*o que o usuário vai digitar, o que vai retornar*/
    return view('welcome');   
});


Route::get('/home', 'HomeController@viewHome');  /*acessar um método de uma classe sem criar um objeto*/
 
Route::get('/cidade', 'CidadeController@viewCidade');