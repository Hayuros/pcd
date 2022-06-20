<?php

namespace App\Http\Controllers;

use App\Models\Acessibilidade;
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
        $acessibilidades = Acessibilidade::all();

        return view("Cadastros.postagem", ['categorias' => $categorias, 'estabelecimentos' => $estabelecimentos, 'acessibilidades' => $acessibilidades]);
    }

    public function exibirPostagem()
    {
        return view("Exibir.postagem");
    }

    public function store(Request $request)
    {
        $acessibilidade = new Acessibilidade;
        $postagem = new Postagem;

        // $postagem->estabelecimento = $postagem->estabelecimento;
        // $postagem->categoria = $postagem->categoria;
        // $postagem->acessibilidade = $postagem->acessibilidade;
        $postagem->descricao = $postagem->descricao;

        $postagem->save();
    }
}
