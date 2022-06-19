<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Estabelecimento;
use App\Models\Postagem;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PostagemController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::all();
        $estabelecimentos = Estabelecimento::all();

        return view("Cadastros.postagem", ['categorias' => $categorias, 'estabelecimentos' => $estabelecimentos]);
    }

    public function exibirPostagem()
    {
        return view("Exibir.postagem");
    }

    public function store(Request $request)
    {
        
    }
}
