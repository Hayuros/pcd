@extends('Usuario.layouts.main')

@section('title', 'Listagem de Postagens | Pcd em Ação')
{{-- @section('style', '/css/Listagens/postagens.scss') --}}

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Estabelecimento</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postagens as $postagem)
                @foreach ($estabelecimentos as $estabelecimento)
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $estabelecimento->nome }}</td>
                            <td>{{ $categoria->nome }}</td>
                            <td>
                                <a href="" class="btn btn-cancelar">
                                    <i class="bi bi-trash">Excluir</i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            @endforeach
        </tbody>
    </table>
@endsection
