<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AcessibilidadeController extends Controller
{
    //
    public function index()
    {
        return view('Cadastros.acessibilidade');
    }
}
