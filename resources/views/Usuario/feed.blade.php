@extends('Usuario.layouts.main')

@section('title', 'Feed | Pcd em Ação')

@section('style', '/css/feed.scss')

@section('content')
    <div class="container m-md-5">
        <div class="row">
            <div class="col-md-12">
                <form class="form-inline my-2 my-lg-0">
                    <button class="btn my-sm-0" type="button">
                        <i class="bi bi-search"></i>
                    </button>

                    <input class="form-control my-2 mr-sm-2 flex-auto" type="search" placeholder="Pesquisar"
                        aria-label="Pesquisar" />
                </form>
            </div>
        </div>
        @foreach ($postagens as $postagen)
            <div class="row">
                <div class="col-md-12">
                    <div class="card my-2 w-auto">
                        <div class="card-header">
                            <h5 class="card-title">
                                @foreach ($estabelecimentos as $estabelecimento)
                                    <h5>{{ $estabelecimento->nome }}</h5>
                                @endforeach
                                @foreach ($acessibilidades as $acessibilidade)
                                    @for ($i = 0; $i < $acessibilidade->qtdEstrelas; $i++)
                                        <i class="bi bi-star-fill text-warning"></i>
                                    @endfor
                                @endforeach

                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="card-deck">
                                <div class="card-text col-md-12">
                                    @foreach ($acessibilidades as $acessibilidade)
                                        <p>{{ $acessibilidade->nome }}</p>
                                        @for ($i = 0; $i < $acessibilidade->qtdEstrelas; $i++)
                                            <i class="bi bi-star-fill text-warning"></i>
                                        @endfor
                                    @endforeach
                                </div>

                                <div class="card-text col-md-12">
                                    @foreach ($categorias as $categoria)
                                        <p>{{ $categoria->nome }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a type="button" class="btn btn-link" href="/Exibir/Postagem/">
                                Ver Mais <i class="bi bi-caret-right-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
