<?php

namespace App\Http\Controllers;

use App\Models\Acessibilidade;
use App\Models\Categoria;
use App\Models\Estabelecimento;
use App\Models\Postagen;
use App\Models\User;
use BaconQrCode\Renderer\Color\Rgb;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class UsuarioController extends Controller
{
    public function index()
    {
        $postagem =  new Postagen();
        $postagens = Postagen::all();
        // $categorias = Categoria::first();
        // $estabelecimentos = Estabelecimento::all();
        // $acessibilidades = Acessibilidade::all();

        // $categoriaPostagem = Categoria::where('id', $postagem->categoria_id)->first();
        // $acessibilidadePostagem = Acessibilidade::where('id', $postagem->acessibilidade_id)->first();
        // $estabelecimentoPostagem = Estabelecimento::where('id', $postagem->estabelecimento_id)->first();


        // return view("Usuario.feed", ['postagens' => $postagens, 'categoriaPostagem' => $categoriaPostagem, 'estabelecimentoPostagem' => $estabelecimentoPostagem, 'acessibilidadePostagem' => $acessibilidadePostagem]);
        return view("Usuario.feed", ['postagens' => $postagens]);
    }

    public function perfil()
    {
        $usuario = auth()->user();

        return view('Usuario.perfil', ['usuario' => $usuario]);
    }

    public function listaPostagens()
    {
        $categorias = Categoria::all();
        $estabelecimentos = Estabelecimento::all();
        $acessibilidades = Acessibilidade::all();
        $postagens = Postagen::all();

        return view('Listagens.postagens', ['categorias' => $categorias, 'estabelecimentos' => $estabelecimentos, 'acessibilidades' => $acessibilidades, 'postagens' => $postagens]);
    }

    public function edit()
    {
        $usuario = auth()->user();

        return view('Usuario.editar', ['usuario' => $usuario]);
    }

    public function update(Request $request)
    {

        $usuario = auth()->user();

        User::findOrFail($usuario->id)->update($request->all());

        return redirect('/feed')->with('msg', 'Usuário editado com Sucesso!');
    }

    public function destroy()
    {
        $usuario = auth()->user();

        User::findOrFail($usuario->id)->delete();

        return redirect('/feed')->with('msg', 'Usuário Deletado com sucesso!');
    }
}
