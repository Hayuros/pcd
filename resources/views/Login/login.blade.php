@extends("Login.layouts.main")

@section("title", "Login | Pcd em Ação")

@section("style", "/css/login.css")

@section("content")
<div class="container">
    <h2 class="text-center m-md-5">PcD em Ação</h2>
    <div class="col-md-6 form m-md-auto">
        <form class="m-lg-5 shadow-lg">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <h5 class="text-center">Fazer Login</h5>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Email ou CPF</label>
                    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu email ou CPF " />

                    <label for="exampleInputEmail1">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" aria-describedby="emailHelp" placeholder="Senha" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <button class="btn btn-block btn-primary disabled" actio>
                        Login
                    </button>
                </div>
            </div>

            <div class="form-group col-md-12 cad">
                <a href="#" data-toggle="modal" data-target="#modalCadastro" class="disabled">
                    Cadastre-se
                </a>
            </div>

            <div class="col-md-12 cad">
                <a class="text-danger disabled" href="#" data-toggle="modal" data-target="#modalRecuperar">
                    Recuperar Senha
                </a>
            </div>
        </form>
    </div>
</div>

<!-- Modal de Cadastro -->
<div class="modal fade justify-content-center" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Cadastre-se</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="m-md-5 h-auto w-auto justify-content-center container-fluid">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome e Sobrenome" />

                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Senha</label>
                            <input type="password" class="form-control" id="senha" name="senha" placeholder="Inserir Senha" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleInputEmail1">Confirmar Senha</label>
                            <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" placeholder="Confirmar Senha" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btn-fechar-cadastrar" class="btn btn-secondary" data-dismiss="modal">
                    Fechar
                </button>

                <button type="button" id="btn-cadastrar" class="btn btn-info">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Recuperação de Senha -->
<div class="modal fade m-md-5" id="modalRecuperar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Recuperar Senha</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email-recuperar" name="email-recuperar" placeholder="Seu Email" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                    Fechar
                </button>

                <button type="button" id="btn-recuperar" class="btn btn-info">
                    Recuperar
                </button>
            </div>
        </div>
    </div>
</div>
@endsection