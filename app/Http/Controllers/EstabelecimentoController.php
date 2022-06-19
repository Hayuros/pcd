<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EstabelecimentoController extends Controller
{
    //
    public function index()
    {
        return view("Cadastros.estabelecimento");
    }

    public function store(Request $request)
    {
        $estabelecimento = new Estabelecimento;

        $estabelecimento->nome = $request->nome;
        $estabelecimento->cep = $request->cep;
        $estabelecimento->numero = $request->numero;

        $estabelecimento->save();

        return redirect("/Feed")->with('msg', "Estabelecimento criado com Sucesso!");
    }
}
