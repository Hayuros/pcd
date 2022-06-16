@extends("Login.layouts.main")

@section("title", "Sobre | Pcd em Ação")

@section("style", "/css/sobre.css")

@section("content")
<div class="container p-5 m-md-5 shadow-lg">
    <div class="row my-2">
        <div class="col-md-6">
            <h3>Sobre o TCS</h3>
            <p>
                Trabalho de Conclusão de Curso, desenvolvido na Faculdade Senac de
                Joinville, no curso de Tecnólogo em Análise e Desenvolvimento de
                Sistemas.
            </p>
        </div>
        <div class="col-md-6">
            <img class="rounded mx-auto d-block img-fluid my-2" src="https://senacblog.s3.sa-east-1.amazonaws.com/wp-content/uploads/2018/06/25092146/inform%C3%A1tica.jpg" alt="imagem sobre tcs." />
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6">
            <img class="rounded mx-auto d-block img-fluid my-2" src="https://senacblog.s3.sa-east-1.amazonaws.com/wp-content/uploads/2018/06/25092146/inform%C3%A1tica.jpg" alt="imagem sobre tcs." />
        </div>
        <div class="col-md-6">
            <h3>Sobre a Equipe</h3>
            <p>
                Formada pelos Alunos: Hayuros, Ricardo, Rodrigo e Luiz Paulo.
                Nossa equipe visa a inclusão de Pessoas com Deficiência, através
                da acessibilidade nos estabelecimentos, sendo eles públicos ou
                particulares.
            </p>
        </div>
    </div>

    <div class="row my-2">
        <div class="col-md-6">
            <h3>Sobre o Projeto</h3>
            <p>
                O projeto propõe uma rede social voltada para a acessibilidade
                destas pessoas. A Rede Social possui classificação por tipo de
                deficiência, para que futuramente seja mais fácil de encontrar os
                estabelecimentos com a acessibilidade desejável.
            </p>
        </div>
        <div class="col-md-6 img">
            <img class="rounded mx-auto d-block img-fluid my-2" src="/img/Logo.png" alt="imagem sobre tcs." />
        </div>
    </div>
</div>
@endsection