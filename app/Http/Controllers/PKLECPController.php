<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PKLECPController extends Controller
{
    public function viewPKLECP()
    {
      return view('app.estoque.cadastro.PKLECP');
    }
}
