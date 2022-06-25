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
        $usuario = auth()->user();
        $postagem = new Postagen;
        $acessibilidade = Acessibilidade::findOrFail($request->acessibilidade);

        $postagem->user_id = $usuario->id;
        $postagem->estabelecimento_id = $request->estabelecimento;
        $postagem->categoria_id = $request->categoria;
        $postagem->descricao = $request->descricao;
        $postagem->qtdEstrelas = $request->qtdEstrelas;

        $postagem->save();

        $acessibilidade->acessibilidadeDaPostagem()->attach($postagem->id);

        return redirect('/feed')->with('msg', 'Postagem feita com Sucesso!');
    }
}
