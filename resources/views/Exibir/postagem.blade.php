@extends('Usuario.layouts.main')

@section('title', 'Postagem | Pcd em Ação')

@section('style', '/css/exibir.scss')

@section('content')
    <div class="content m-md-5 p-2">
        <div class="row py-5">
            <div class="col-md-12 text-center">
                <h3>Nome do Estabelecimento</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h5>Endereço</h5>
                <p>endereço do estabelecimento</p>
            </div>
            <div class="col-md-6">
                <div class="col-md-6">
                    <h5>Avaliações</h5>
                    <p>Vaga de estacionamento especial</p>
                    <p>Espaço interno</p>
                    <p>Rampa de acesso</p>
                    <p>Banheiro adaptado</p>
                    <p>Cardápio em braile</p>
                </div>

            </div>
        </div>

        <div class="row py-5">
            <div class="col-md-12">
                <h5>Fotos do Estabelecimento</h5>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/image 3.png" alt="Primeiro Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/image 4.png" alt="Segundo Slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/image 6.png" alt="Terceiro Slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Próximo</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-md-12">
                <h5>Comentários dos Clientes</h5>
            </div>
            <div class="col-md-12">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start ">
                        <div class="d-flex w-100 justify-content-between">
                            <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd"
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small class="font-weight-bold"> - Donec id elit non mi porta.</small>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
