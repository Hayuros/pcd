@extends('Usuario.layouts.main')

@section('title', 'Nova Categoria | Pcd em Ação')

@section('style', '/css/cadastros.scss')

@section('content')
    <form action="/Categorias" method="POST" class="m-md-5 shadow-lg cad-edit">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <h2 class="text-center m-md-5">Nova Categoria de Deficiência</h2>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="nome">Nome:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="nome" id="nome" placeholder="Nome da Categoria" class="form-control"
                    required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="descricao">Descrição:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="descricao" id="descricao" placeholder="Descrição da Categoria"
                    class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <button type="submit" value="Cadastrar Categoria" class="btn btn-salvar btn-lg">
                    <i class="bi bi-check-all">Salvar</i>
                </button>
                <a type="cancel" class="btn btn-cancelar btn-lg" href="/feed" value="Cancelar Cadastro">
                    <i class="bi bi-trash">Cancelar</i>
                </a>
            </div>
        </div>
    </form>
@endsection
