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
    public function authenticate(Input $input){
        //Validando se o email existe
        if (!User::where('email', $input->get('email'))->first()){
            Session::flash('error', Lang::get('Email nao cadastrado no sistema!'));
            return Redirect::route('login')->withInput();
        }
        //Validando usuario e senha 
        if (Auth::attempt(['email' => $input->get('email'), 'password' => $input->get('password')]))
        {
            return redirect()->route('inicio'); 
        //Senha incorreta
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
