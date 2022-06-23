@extends('Usuario.layouts.main')

@section('title', 'Perfil | Pcd em Ação')

@section('style', '/css/perfil.scss')

@section('content')

    <div class="container">
        <div class="row my-3 p-2">
            <div class="col-md-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div>
        </div>
        <div class="row my-3 p-2 text-center">
            <div class="col-md-2">
                <h3>Nome: </h3>
                <h3>E-mail: </h3>
                {{-- <h3>Categoria da Deficiência: </h3> --}}
            </div>
            <div class="col-md-10">
                <h3>{{ $usuario->name }}</h3>
                <h3>{{ $usuario->email }} </h3>
                {{-- <h3>Categoria da Deficiência: </h3> --}}
            </div>
        </div>
        <div class="row my-3 p-2 text-center">
            <div class="col-md-12">
                <a class="btn btn-editar btn-lg" href="/Perfil/Editar/" type="button">
                    <i class="bi bi-pencil">Editar Perfil</i>
                </a>
                <form action="/Perfil/Deletar/{id}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-excluir btn-lg" type="submit">
                        <i class="bi bi-trash">Excluir Perfil</i>
                    </button>
                </form>
                <a class="btn btn-listar btn-lg" type="button" href="/Listar/Postagens/Usuario/{}">
                    <i class="bi bi-list">Listar Postagens</i>
                </a>
            </div>
        </div>


    @endsection
