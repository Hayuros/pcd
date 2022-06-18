<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstabelecimentoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostagemController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace("Login")->group(function () {
    Route::get("/", [LoginController::class, "index"]);
    Route::get("/Sobre", [LoginController::class, "sobre"]);
});

Route::namespace("Usuario")->group(function () {
    Route::get("/Feed", [UsuarioController::class, 'index']);
    Route::get("/Perfil", [UsuarioController::class, "perfil"]);
});

Route::namespace("Cadastros")->group(function () {
    Route::get("/Cadastrar/Postagem", [PostagemController::class, 'index']);
    Route::get("/Cadastrar/Estabelecimento", [EstabelecimentoController::class, 'index']);
    Route::get("/Cadastrar/Categoria", [CategoriaController::class, 'index']);
});

Route::namespace("Listagens")->group(function () {
    Route::get("Listar/Postagens/Usuario/{}", [UsuarioController::class, "listaPostagens"]);
    // Route::get("Listar-Postagens/Usuario{}");
});

Route::namespace("Exibir")->group(function () {
    Route::get("Exibir/Postagem/", [PostagemController::class, 'exibirPostagem']);
});
