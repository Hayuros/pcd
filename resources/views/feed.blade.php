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
        <div class="row">
            <div class="col-md-12">
                <div class="card my-2 w-auto">
                    <div class="card-header">
                        <h5 class="card-title">
                            Nome do Estabelecimento
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <i class="bi bi-star text-warning"></i>
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="card-deck">
                            <div class="card-text col-md-12">
                                <h6>Endereço:</h6>
                            </div>
                            <div class="card-text col-md-6">
                                <p>Espaço Externo:</p>
                                <p>Rampas de Acesso:</p>
                                <p>Estacionamento Especial:</p>
                            </div>
                            <div class="card-text col-md-6">
                                <p>Espaço Interno:</p>
                                <p>Banheiro Adaptado:</p>
                                <p>Caixa Acessível:</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center">
                        <button type="button" class="btn btn-link">
                            Ver Mais <i class="bi bi-caret-right-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
