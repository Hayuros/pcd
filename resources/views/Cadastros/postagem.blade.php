@extends('Usuario.layouts.main')

@section('title', 'Nova Postagem | Pcd em Ação')

@section('style', '/css/cadastros.scss')

@section('content')
    <form action="/Postagens" method="POST" class="m-lg-5 shadow-lg cad-edit">
        @csrf
        <div class="form-row text-center m-md-2">
            <div class="form-group col-md-12">
                <h2>Nova Publicação</h2>
            </div>
        </div>
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
                        <option value="{{ $estabelecimento->id }}">{{ $estabelecimento->nome }}
                        </option>
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
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
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
            <div class="form-group col-md-12 text-center">
                <label for="acessibilidade">Categoria da Acessibilidade</label>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-8">
                <select id="acessibilidade" name="acessibilidade" class="form-control">
                    @foreach ($acessibilidades as $acessibilidade)
                        <option value="{{ $acessibilidade->id }}">{{ $acessibilidade->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-4">
                <select id="qtdEstrelas" name="qtdEstrelas" class="form-control">
                    @for ($i = 0; $i < $acessibilidade->qtdEstrelas; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>
        </div>



        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="">Digite sua opinião sobre o estabelecimento: </label>
            </div>
            <div class="form-group col-md-8">
                <textarea name="descricao" id="descricao" cols="10" rows="5" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-12 text-center">
                <button type="submit" class="btn btn-salvar btn-lg">
                    <i class="bi bi-check-all">Salvar</i>
                </button>
                <a type="cancel" href="/feed" value="Cancelar Cadastro" class="btn btn-cancelar btn-lg">
                    <i class="bi bi-trash">Cancelar</i>
                </a>
            </div>
        </div>
    </form>
@endsection
