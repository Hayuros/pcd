@extends('Usuario.layouts.main')

@section('title', 'Perfil | Pcd em Ação')

@section('style', '/css/perfil.scss')

@section('content')

    <div class="container">
        <div class="row my-3 p-2">
            <div class="col-md-12 text-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                    class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
            </div>
        </div>
        <div class="row my-3 p-2">
            <div class="col-md-6">
                <h3>Nome: </h3>
                <h3>E-mail: </h3>
                <h3>Categoria da Deficiência: </h3>
                <h3>Senha: </h3>
            </div>
            <div class="col-md-6">
                <h3>{{ $usuario->name }}</h3>
                <h3>E-mail: </h3>
                <h3>Categoria da Deficiência: </h3>
                <h3>Senha: </h3>
            </div>
        </div>
        <div class="row my-3 p-2 text-center">
            <div class="col-md-12">
                <button class="btn btn-editar btn-lg" type="button" data-toggle="modal" data-target="#modalCadastro">
                    <i class="bi bi-pencil">Editar Perfil</i>
                </button>
                <button class="btn btn-excluir btn-lg" type="button">
                    <i class="bi bi-trash">Excluir Perfil</i>
                </button>
                <a class="btn btn-listar btn-lg" type="button" href="/Listar/Postagens/Usuario/{}">
                    <i class="bi bi-list">Listar Postagens</i>
                </a>
            </div>
        </div>

        <!-- Modal de Edição -->
        <div class="modal fade justify-content-center" id="modalCadastro" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Editar Cadastro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="m-md-5 h-auto w-auto justify-content-center container-fluid">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Nome Completo</label>
                                    <input type="text" class="form-control" id="nome" name="nome"
                                        placeholder="Insira o nome e Sobrenome" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Seu Email" />
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Categoria da Deficiência</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">...</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-cancelar btn-lg">
                            <i class="bi bi-trash">Cancelar</i>
                        </button>
                        <button type="button" class="btn btn-salvar btn-lg">
                            <i class="bi bi-check-all">Modificar</i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endsection
