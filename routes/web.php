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

    // Pesquisar
    Route::any('pesquisar','CadastroPessoa@pesquisar');

});

