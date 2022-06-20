@extends('Usuario.layouts.main')

@section('title', 'Nova Postagem | Pcd em Ação')

@section('style', '/css/cadastros.scss')

@section('content')
    <h2 class="text-center m-md-5">Nova Publicação</h2>
    <form action="/Acessibilidades" method="POST" class="m-lg-5 shadow-lg">
        <!-- Linha do Endereço do Estabelecimento -->
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <h5>Sobre o Estabelecimento:</h5>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="estabelecimento">Estabelecimento</label>
            </div>
            <div class="form-group col-md-10">
                <select name="estabelecimento" id="estabelecimento" class="form-control">
                    @foreach ($estabelecimentos as $estabelecimento)
                        <option value="{{ $estabelecimento->idEstabelecimento }}">{{ $estabelecimento->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="categoria">Categoria</label>
            </div>
            <div class="form-group col-md-10">
                <select name="categoria" id="categoria" class="form-control">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->idCategoria }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        {{-- <div class="form-row">
            <div class="form-group col-md-2">
                <label for="">Adicionar imagem: </label>

            </div>
            <div class="form-group col-md-10">
                <input type="file" />
            </div>
        </div> --}}

        <hr />

        <!-- Linha da Acessibilidade do Estabelecimento -->
        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <h5>Acessibilidade do Estabelecimento</h5>
            </div>
        </div>

        <div class="form-row">
            @foreach ($acessibilidades as $acessibilidade)
                <div class="form-group col-md-8">
                    <label for="acessibilidade">{{ $acessibilidade->nome }}</label>
                </div>
                <div class="form-group col-md-4">
                    <select id="" class="form-control">
                        @for ($i = 0; $i < $acessibilidade->qtdEstrelas; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                        <option selected>Escolher...</option>

                    </select>
                </div>
            @endforeach
        </div>



        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="">Digite sua opinião sobre o estabelecimento: </label>
            </div>
            <div class="form-group col-md-8">
                <textarea name="Opinião do estabelecimento" id="" cols="10" rows="5" class="form-control"></textarea>
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
