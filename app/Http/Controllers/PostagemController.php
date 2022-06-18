<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostagemController extends Controller
{
    //
    public function index()
    {
        return view("Cadastros.postagem");
    }

    public function exibirPostagem()
    {
        return view("Exibir.postagem");
    }
}
