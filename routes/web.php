<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::middleware(['auth'])->get('/', function () {
    return view('index');
});

// Grupo para as rotas de pessoa

Route::middleware(['auth'])->prefix('/pessoa')->group(function(){
    Route::get('/visualiza', 'CadastroPessoa@index')->name('visualiza.pessoa');
    Route::get('/cadastro', 'CadastroPessoa@create')->name('cadastro.pessoa');
    Route::post('/cadastrar', 'CadastroPessoa@store')->name('cadastrar.pessoa');
    Route::get('/editar/{id}', 'CadastroPessoa@edit')->name('edit.pessoa');
    Route::post('/editado/{id}', 'CadastroPessoa@update')->name('editado.pessoa');
    Route::delete('/excluir/{id}', 'CadastroPessoa@destroy');

    // Pesquisar
    Route::any('pesquisar','CadastroPessoa@pesquisar');

    // SMS
    Route::get('/sms', 'SMSController@send')->name('sms.pessoa');
    Route::get('/send-sms', 'SMSController@smssend')->name('sms-send');

});



Route::get('/home', 'HomeController@index')->name('home');
