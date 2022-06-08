<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/global.css" />
    <link rel="stylesheet" href="../css/perfil.css" />

    <title>Perfil | PcD em Ação</title>
</head>

<body>
    <header>
        <?php
        include("src/components/nav.php");
        ?>
    </header>


    <main class="text-center m-md-5">
        <div class="container">
            <div class="row my-3 p-2">
                <div class="col-md-12">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                    </svg>
                </div>
            </div>
            <div class="row my-3 p-2">
                <div class="col-md-6">
                    <h3>Nome: </h3>
                    <h3>E-mail: </h3>
                    <h3>Classe da Deficiência: </h3>
                    <h3>Senha: </h3>
                </div>
                <div class="col-md-6">
                    <h3>Nome da Pessoa</h3>
                    <h3>E-mail: </h3>
                    <h3>Classe da Deficiência: </h3>
                    <h3>Senha: </h3>
                </div>
            </div>
            <div class="row my-3 p-2">
                <div class="col-md-12">
                    <button class="btn text-center btn-lg disabled" type="button" data-toggle="modal" data-target="#modalCadastro">
                        Editar Cadastro
                    </button>
                </div>
            </div>
    </main>

    <footer>
        <?php
        include("src/components/footer.php");
        ?>
    </footer>
</body>

</html>

<!-- Modal de Edição -->
<div class="modal fade justify-content-center" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    Modificar
                </button>
            </div>
        </div>
    </div>
</div>