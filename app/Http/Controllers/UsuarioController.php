<?php

namespace App\Http\Controllers;

use App\Models\Acessibilidade;
use App\Models\Categoria;
use App\Models\Estabelecimento;
use App\Models\Postagen;
use App\Models\User;
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
        return view("Usuario.perfil");
    }

    public function listaPostagens()
    {
        $categorias = Categoria::all();
        $estabelecimentos = Estabelecimento::all();
        $acessibilidades = Acessibilidade::all();
        $postagens = Postagen::all();

        return view('Listagens.postagens', ['categorias' => $categorias, 'estabelecimentos' => $estabelecimentos, 'acessibilidades' => $acessibilidades, 'postagens' => $postagens]);
    }

    public function edit($id)
    {
        $usuario = auth()->user();

        $usuario = User::findOrFail($id);

        return view('Usuario.perfil', ['usuario' => $edit]);
    }
}
