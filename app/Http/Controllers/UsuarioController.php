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
        $postagens =  Postagen::all();
        $categorias = Categoria::all();
        $estabelecimentos = Estabelecimento::all();
        $acessibilidades = Acessibilidade::all();


        return view("Usuario.feed", ['categorias' => $categorias, 'estabelecimentos' => $estabelecimentos, 'acessibilidades' => $acessibilidades, 'postagens' => $postagens]);
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
