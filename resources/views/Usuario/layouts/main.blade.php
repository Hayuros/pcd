<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <!-- Css Interno -->
    <link rel="stylesheet" href="/css/global.scss" />
    <link rel="stylesheet" href="@yield('style')" />


    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <img src="/img/Logo.png" alt="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-item nav-link p-2" href="/feed">
                            <i class="bi bi-card-list"></i>
                            <p>Postagens</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link p-2" href="/Cadastrar/Estabelecimento">
                            <i class="bi bi-plus-square"></i>
                            <p>Novo Estabelecimento</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link p-2" href="/Cadastrar/Postagem">
                            <i class="bi bi-plus-square"></i>
                            <p>Nova Postagem</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link p-2" href="/Cadastrar/Categoria">
                            <i class="bi bi-plus-square"></i>
                            <p>Nova Categoria</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link p-2" href="/Cadastrar/Acessibilidade">
                            <i class="bi bi-plus-square"></i>
                            <p>Nova Acessibilidade</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link p-2" href="/Perfil">
                            <i class="bi bi-person-circle"></i>
                            <p>Perfil</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        @auth
                            <form action="/logout" method="POST" class="btn-logout">
                                @csrf
                                <a type="button" class="btn"
                                    onclick="event.preventDefault(); 
                                    this.closest('form').submit();">
                                    Sair
                                </a>
                            </form>
                        @endauth
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>

        @if (session('msg'))
            <p class="msg">{{ session('msg') }}</p>
        @endif

        <div class="container">
            @yield('content')
        </div>

        <div vw class="enabled">
            <div vw-access-button class="active"></div>
            <div vw-plugin-wrapper>
                <div class="vw-plugin-top-wrapper"></div>
            </div>
            <div class="py-5">
                <div class="py-2">
                    <button class="btn py-2">A+</button>
                </div>
                <div class="py-2">
                    <button class="btn">A+</button>
                </div>
                <div class="py-2">
                    <button class="btn"><img src="/img/contrast-circle-symbol.png" alt=""></button>
                </div>
            </div>
        </div>
        <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
        <script>
            new window.VLibras.Widget('https://vlibras.gov.br/app');
        </script>
    </main>

    <footer>

        <!-- JavaScript (Opcional) -->
        <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
        </script>
    </footer>
</body>

</html>
