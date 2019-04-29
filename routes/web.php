<?php

//Login
Route::get('/', function () { return view('login');})->name('login');
Route::get('/sair', "LoginController@logout")->name('sairUsuario');
Route::post('/login', "LoginController@authenticate")->name('logarUsuario');

//Protecao das rotas por middleware
Route::group(['middleware' => ['log']], function () {
    //Inicio do sistema
    Route::get('/inicio', function () {return view('app.home');})->name("inicio");
    //Cadastrar Produto em Estoque 
    Route::get('/estoque-cadastro-PKLECP', "PKLECPController@viewPKLECP")->name('estoque-cadastro-PKLECP');
});