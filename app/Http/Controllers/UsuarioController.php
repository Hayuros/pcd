<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view("Usuario.feed");
    }

    public function perfil()
    {
        return view("Usuario.perfil");
    }

    public function listaPostagens()
    {
        return view('Listagens.postagens'); 
    }
}
    