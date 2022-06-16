<?php

use App\Http\Controllers\LoginController;
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

Route::namespace("Logado")->group(function () {
    Route::get("/Feed", [UsuarioController::class, 'index']);
});
