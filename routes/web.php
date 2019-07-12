<?php

//Login
Route::get('/', function () { return view('login');})->name('login');
Route::get('/sair', "LoginController@logout")->name('sairUsuario');
Route::post('/login', "LoginController@authenticate")->name('logarUsuario');

//Protecao das rotas por middleware
Route::group(['middleware' => ['log']], function () {
    //Inicio do sistema
    Route::get('/inicio', function () {return view('app.home');})->name("inicio");
    //PKECP Estoque Cadastrar Produto - view 
    Route::get('/PKECP', "PKECPController@viewPKECP")->name('PKECP');
   
    Route::post('/cmd-operacao', "PKECPController@cmdOperacao")->name('cmd-operacao');
       
});

