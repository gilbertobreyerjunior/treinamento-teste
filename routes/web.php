<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});


// Grupo para as rotas de pessoa

Route::prefix('/pessoa')->group(function(){
    Route::get('/visualiza', 'CadastroPessoa@index')->name('visualiza.pessoa');
    Route::get('/cadastro', 'CadastroPessoa@create')->name('cadastro.pessoa');
    Route::post('/cadastrar', 'CadastroPessoa@store')->name('cadastrar.pessoa');
    Route::get('/editar/{id}', 'CadastroPessoa@edit')->name('edit.pessoa');
    Route::post('/editado/{id}', 'CadastroPessoa@update')->name('editado.pessoa');
    Route::delete('/excluir/{id}', 'CadastroPessoa@destroy');
    // estou usando um name, só que nessa forma usando name, não é dinamico, teria que usar no excluir não uso name?
// pde usar url


});

