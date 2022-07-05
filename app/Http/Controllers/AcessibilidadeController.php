<?php

namespace App\Http\Controllers;

use App\Models\Acessibilidade;
use App\Models\Postagen;
use Illuminate\Http\Request;

class AcessibilidadeController extends Controller
{
    //
    public function index()
    {
        return view('Cadastros.acessibilidade');
    }

    public function store(Request $request)
    {
        $acessibilidades = new Acessibilidade;

        $acessibilidades->nome = $request->nome;
        $acessibilidades->descricao = $request->descricao;
        $acessibilidades->qtdEstrelas = $request->qtdEstrelas;

        $acessibilidades->save();

        return redirect('/feed');
    }
}
