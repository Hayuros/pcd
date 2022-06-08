<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include("src/components/head.php");
    ?>
    <link rel="stylesheet" href="../css/avaliacoes.css" />
    <title>Avaliações | Pcd em Ação</title>
</head>

<body>
    <header>
        <?php
        include("src/components/nav.php");
        ?>
    </header>

    <main>
        <div class="container">
            <div class="row my-5">
                <div class="col-md-12 text-center">
                    <h2>
                        Nome do Estabelecimento
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </h2>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <h3 class="font-weight-bold">Avaliações:</h3>
                </div>
                <div class="col-md-4 my-2">
                    <h6>Vaga para estacionamento especial</h6>
                    <h6>Espaço interno</h6>
                    <h6>Rampa de acesso</h6>
                    <h6>Banheiro adaptado</h6>
                    <h6>Cardápio em braile</h6>
                </div>
                <div class="col-md-2 my-2">
                    <h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </h6>

                    <h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </h6>

                    <h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </h6>

                    <h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </h6>

                    <h6>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-half text-warning"></i>
                        <i class="bi bi-star text-warning"></i>
                    </h6>
                </div>
                <div class="col-md-6">
                    <h4 class="font-weight-bold">Endereço:</h4>
                    <p>teste</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228989.28793236724!2d-49.10296444722037!3d-26.263038697967772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94dea3f39db1ab37%3A0xbc4b989df161e9fa!2sJoinville%20-%20SC!5e0!3m2!1spt-BR!2sbr!4v1654555865680!5m2!1spt-BR!2sbr" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-md-12">
                    <h3 class="font-weight-bold">Comentários dos Clientes:</h3>
                </div>
                <div class="col-md-6 my-3">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        Testes
                    </h3>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <textarea id="" cols="3" rows="5" class="form-control" placeholder="Insira seu comentário..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <h3 class="font-weight-bold">Fotos do Estabelecimento:</h3>
                    <img src="../img/fachada-para-restaurante.jpg" alt="" class="img-fluid" />
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