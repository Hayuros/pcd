@extends('Usuario.layouts.main')

@section('title', 'Listagem de Postagens | Pcd em Ação')
{{-- @section('style', '/css/Listagens/postagens.scss') --}}

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Estabelecimento</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">img</td>
                <td>Estabelecimento</td>
                <td>Categoria</td>
                <td>
                    <a href="" class="btn btn-cancelar">
                        <i class="bi bi-trash">Excluir</i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
