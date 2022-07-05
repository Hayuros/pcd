<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use App\Models\Postagen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class ComentarioController extends Controller
{
    //
    public function comentar($id, Request $request)
    {
        $usuario = auth()->user();

        $comentario = new Comentario;
        $postagem = Postagen::findOrFail($id);

        $comentario->user_id = $usuario->id;
        $comentario->postagen_id = $postagem->id;
        $comentario->descricao = $request->comentario;

        $comentario->save();

        return redirect('/feed')->with('msg', 'Comentario efetuado com Sucesso!');
    }
}
