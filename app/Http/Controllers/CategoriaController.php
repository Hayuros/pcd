<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        return view("Cadastros.categoria");
    }

    public function store(Request $request)
    {
        $categoria = new Categoria;

        $categoria->nome = $request->nome;
        $categoria->descricao = $request->descricao;
        
        $categoria->save();

        return redirect("/Feed")->with('msg', "Categoria criada com Sucesso!");
    }
}
