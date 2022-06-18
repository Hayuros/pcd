<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstabelecimentoController extends Controller
{
    //
    public function index()
    {
        return view("Cadastros.estabelecimento");
    }
}
