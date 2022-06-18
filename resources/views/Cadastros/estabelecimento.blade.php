@extends('Usuario.layouts.main')

@section('title', 'Cadastrar Estabelecimento | Pcd em Ação')

@section('style', '/css/cadastros.scss')


@section('content')
    <form class="m-md-5 shadow-lg">
        <div class="form-row">
            <div class="form-group col-md-12">
                <h2 class="text-center m-md-5">Novo Estabelecimento</h2>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Nome:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">CEP:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Número:</label>
            </div>
            <div class="form-group col-md-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <button type="button" class="btn btn-salvar btn-lg">
                    <i class="bi bi-check-all">Salvar</i>
                </button>
                <button type="button" class="btn btn-cancelar btn-lg">
                    <i class="bi bi-trash">Cancelar</i>
                </button>
            </div>
        </div>
    </form>
@endsection
