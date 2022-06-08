<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("src/components/head.php");
    ?>
    <link rel="stylesheet" href="../css/feed.css" />
    <title>Feed | Pcd em Ação</title>
</head>

<body>
    <header>
        <?php
        include("src/components/nav.php");
        ?>
    </header>

    <main>
        <div class="container m-md-5">
            <div class="row">
                <div class="col-md-8">
                    <form class="form-inline my-2 my-lg-0">
                        <button class="btn my-sm-0" type="button">
                            <i class="bi bi-search"></i>
                        </button>

                        <input class="form-control my-2 mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" />
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card my-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                Nome do Estabelecimento
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </h5>
                            <p class="card-text">Breve Descrição</p>
                            <a href="./avaliacoes.html" class="btn btn-ver-mais">
                                Ver Mais
                                <i class="bi bi-caret-right-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                Nome do Estabelecimento
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </h5>
                            <p class="card-text">Breve Descrição</p>
                            <a href="./avaliacoes.html" class="btn btn-ver-mais">
                                Ver Mais
                                <i class="bi bi-caret-right-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="card my-2">
                        <div class="card-body">
                            <h5 class="card-title">
                                Nome do Estabelecimento
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-half text-warning"></i>
                                <i class="bi bi-star text-warning"></i>
                            </h5>
                            <p class="card-text">Breve Descrição</p>
                            <a href="./avaliacoes.html" class="btn btn-ver-mais">
                                Ver Mais
                                <i class="bi bi-caret-right-fill"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228989.28793236724!2d-49.10296444722037!3d-26.263038697967772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dea3f39db1ab37%3A0xbc4b989df161e9fa!2sJoinville%20-%20SC!5e0!3m2!1spt-BR!2sbr!4v1654555865680!5m2!1spt-BR!2sbr" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="d-flex align-self-center"></iframe>
                </div>
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