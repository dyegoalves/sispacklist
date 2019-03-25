<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input; 
use Auth;
use App\User;
use Session;
use Lang;
use Redirect;

class LoginController extends Controller
{
     
   
    
    public function authenticate( Input $input){
        
        //Capturando usuario no banco de dados
        $user = User::where('email', $input->get('email'))->first();
        
        //Existe este usuario , se nao existe enviar mensagem de error para usuario
        if(!$user) {
          return redirect()
                            ->route('login')
                            ->with('error', 'Usuario  ' . $input->get('email') .  ' nao está cadastrado')
                            ->withInput();
        }
    
        //Validando usuario e senha , Trur para os 2 ok logar 
        if (Auth::attempt(['email' => $input->get('email'), 'password' => $input->get('password')]))
        {
            return redirect()->route('inicio'); 
        //Se nao senha incorreta    
        }else {
            Session::flash('error', Lang::get('Senha incorreta para este email'));
            return Redirect::route('login')->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');     
    }
}
