<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class PKECPController extends Controller
{

    //Mostra a view de  Estoque e Cadastro de Produtos
    public function viewPKECP()
    {
      return view('app.estoque.cadastro.PKECP');
    }

    public function cmdOperacao(Request $resquest)
    {
                        $op = $resquest->get('pesquisaOP');
                        $routeList = Route::getRoutes();
                        $nameroutes = [];
                        foreach ($routeList as $rotas) {
                              $nameroutes[] = $rotas->getName(); 
                        }
                                              
                        if(in_array($op , $nameroutes )){
                               $rota = ['rota' => $op];
                               return response()->json($rota);  
                        }else{
                               $error = ['error' => 'Nao existe esta Operação'];
                               return response()->json($error);         
                        }           
                                                
                
    }

}