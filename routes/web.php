<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function() {
	$lista = ['bolo de cenoura', 'Baskhara', 'Torriceli', 'Impulso'];
	return view('formula', ['formula' => $lista]);

});
Route::get('/{nome}', function($nome) {
		$lista2 = ['receita de bolo de cenoura', 
		'Imagem da formula de baskhara', 
		'Imagem da formula de Torriceli', 
		'Imagem da formula de Impulso'];
		
		if ($nome == "bolo de cenoura") {
			return $lista2[0];
		}else if ($nome == "Baskhara"){
			return $lista2[1];
		}else if ($nome == "Torriceli"){
			return $lista2[2];
		}else if ($nome == "Impulso"){
			return $lista2[3];
		}

}) -> name('nome-ind');