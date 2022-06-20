<?php

namespace App\Http\Controllers;

use App\Models\Acessibilidade;
use App\Models\Categoria;
use App\Models\Estabelecimento;
use App\Models\Postagen;
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
        $postagem = new Postagen;
        $acessibilidades = new Acessibilidade;
        $estabelecimento = new Estabelecimento;
        $categorias = new Categoria;

        $categorias->id = $request->idCategoria;
        $estabelecimento->id = $request->idEstabelecimento;

        $postagem->descricao = $request->descricao;
        $postagem->categoria_id = $categorias->id;
        $postagem->estabelecimento_id = $request->idEstabelecimento;


        $acessibilidades->id = $request->idAcessibilidade;
        $acessibilidades->postagens()->attach($acessibilidades->id);

        $postagem->save();
    }
}
