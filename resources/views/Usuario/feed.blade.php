@extends('Usuario.layouts.main')

@section('title', 'Feed | Pcd em Ação')

@section('style', '/css/feed.scss')

@section('content')
    <div class="container m-md-5">
        {{-- <div class="row">
            <div class="col-md-12">
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn my-sm-0" type="button">
                        <i class="bi bi-search"></i>
                    </button>

                    <input class="form-control my-2 mr-sm-2 flex-auto" type="search" placeholder="Pesquisar"
                        aria-label="Pesquisar" />
                </form>
            </div>
        </div> --}}
        @foreach ($postagens as $postagen)
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-2 w-auto">
                        <div class="card-header">
                            <h5 class="card-title">{{ $postagen->estabelecimento->nome }}</h5>
                            @for ($i = 0; $i < $postagen->qtdEstrelas; $i++)
                                <i class="bi bi-star-fill text-warning"></i>
                            @endfor
                        </div>
                        <div class="card-body">
                            <div class="card-deck">
                                <!--<div class="card-text col-md-6">
                                                        {{-- <p>Acessibilidade da Postagem</p> --}}
                                                        {{-- <h5>{{ $postagen->acessibilidade->nome }}</h5> --}}
                                                        {{-- <p>{{ $categoriaPostagem }}</p> --}}
                                                        {{-- <p>{{ $postagen->acessibilidade_nome }}</p> --}}
                                                    </div>-->

                                <div class="card-text col-md-6">
                                    <h5>Informação da postagem</h5>
                                    <p>{{ $postagen->descricao }}</p>
                                </div>
                                <div class="card-text col-md-6">
                                    <h5>Categoria da Acessibilidade da postagem</h5>
                                    <p>{{ $postagen->categoria->nome }}</p>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="card-footer text-center">
                            <a type="button" class="btn btn-link" href="/Exibir/Postagem/">
                                Ver Mais <i class="bi bi-caret-right-fill"></i>
                            </a>
                        </div> --}}
                        {{-- <div class="card-footer">
                            <form action="/Comentarios" method="POST">
                                @csrf
                                <div class="form-row">
                                    <input type="hidden" value="{{ $postagen->id }}">
                                    <div class="form-group col-md-12">
                                        <Label for="comentario">Adicionar Comentário </Label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <button class="input-group-text btn">Comentar</button>
                                            </div>
                                            <textarea class="form-control" aria-label="Com textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
