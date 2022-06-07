<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../css/global.css" />
  <link rel="stylesheet" href="../css/login.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet" />
  <title>Login | PcD em Ação</title>
</head>

<body>
  <header>
    <?php
    include("./src/components/nav.php")
    ?>
  </header>

  <main>
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
  </main>

  <footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </footer>
</body>

</html>