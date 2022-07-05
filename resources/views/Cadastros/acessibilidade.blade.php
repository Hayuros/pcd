@extends('Usuario.layouts.main')

@section('title', 'Cadastro de Acessibilidade | Pcd em Ação')

@section('style', '/css/cadastros.scss')

@section('content')
    <form action="/Acessibilidades" method="POST" class="m-md-5 shadow-lg cad-edit">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <h2 class="text-center m-md-5">Nova Acessibilidade</h2>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="nome">Nome</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="nome" id="nome" placeholder="Digite o nome da acessibilidade."
                    class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Quantidade de Estrelas</label>
            </div>
            <div class="form-group col-md-10">
                <input type="number" name="qtdEstrelas" id="qtdEstrelas" placeholder="Digite o Número de estrelas."
                    class="form-control" required>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="nome">Descrição</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="descricao" id="descricao" placeholder="Digite a descrição da Acessibilidade."
                    class="form-control" required>
            </div>  
        </div>

        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <button type="submit" value="Cadastrar Acessibilidade" class="btn btn-salvar btn-lg">
                    <i class="bi bi-check-all">Salvar</i>
                </button>
                <a type="cancel" href="/feed" value="Cancelar Cadastro" class="btn btn-cancelar btn-lg">
                    <i class="bi bi-trash">Cancelar</i>
                </a>
            </div>
        </div>
    </form>
@endsection
