@extends('Usuario.layouts.main')

@section('title', 'Editando Perfil | Pcd em Ação')

@section('style', '/css/cadastros.scss')

@section('content')
    <form action="/Perfil/Atualizar/{{ $usuario->id }}" method="POST"
        class="m-md-5 h-auto w-auto justify-content-center container-fluid cad-edit" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nome">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name"
                    placeholder="Insira o nome e Sobrenome" value="{{ $usuario->name }}" />
            </div>
            <div class="form-group col-md-12">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email"
                    value="{{ $usuario->email }}" />
            </div>
            {{-- <div class="form-group col-md-12">
                <label for="categoria">Categoria da Deficiência</label>
                <select name="" id="" class="form-control">
                    <option value="">...</option>
                </select>
            </div> --}}
        </div>
        <div class="form-row text-center">
            <div class="form-group col-md-12 ">
                <button type="submit" class="btn btn-salvar btn-lg" value="Editar Perfil">
                    <i class="bi bi-check-all">Editar</i>
                </button>
                <a type="cancel" href="/feed" value="Cancelar Cadastro" class="btn btn-cancelar btn-lg">
                    <i class="bi bi-trash">Cancelar</i>
                </a>
            </div>
        </div>
    </form>
@endsection
