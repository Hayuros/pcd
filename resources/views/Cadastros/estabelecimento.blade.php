@extends('Usuario.layouts.main')

@section('title', 'Cadastrar Estabelecimento | Pcd em Ação')

@section('style', '/css/cadastros.scss')


@section('content')
    <form action="/Estabelecimentos" method="POST" class="m-md-5 shadow-lg">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-12">
                <h2 class="text-center m-md-5">Novo Estabelecimento</h2>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="nome">Nome:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="nome" id="nome" placeholder="Digite o nome do estabelecimento."
                    class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="cep">CEP:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" name="cep" id="cep" placeholder="Digite o CEP do estabelecimento."
                    class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Número:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="number" name="numero" id="numero" placeholder="Digite o Número do estabelecimento."
                    class="form-control" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <button type="submit" value="Cadastrar Estabelecimento" class="btn btn-salvar btn-lg">
                    <i class="bi bi-check-all">Salvar</i>
                </button>
                <a type="cancel" href="/Feed" value="Cancelar Cadastro" class="btn btn-cancelar btn-lg">
                    <i class="bi bi-trash">Cancelar</i>
                </a>
            </div>
        </div>
    </form>
@endsection
