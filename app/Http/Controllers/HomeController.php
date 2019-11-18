<?php

namespace App\Http\Controllers;

use App\Usuario;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function viewHome(){
      //$usuario = new Usuario();
      //$listaUsuarios = $usuario -> all();
      $listaUsuarios = Usuario::all(); //as duas linhas de cima posso escrever apenas nessa linha
      //dd($listaUsuarios);

        return view('home', ["listaUsuariosUm"=>$listaUsuarios]);
  
    }

}    