@extends('base')


@section('content')
    <div class="mx-auto row">
        <div class="col-12">
            <table class="table table-striped">

                <tr>
                    <th>Categoria</th>
                    <th>Título</th>
                    <th>Notícia</th>
                    <th>Descritivo Da Notícia</th>
                    <th>Imagem</th>
                    <th>Status</th>
                    <th>Ações</th>

                </tr>
                @foreach ($Noticias as $Noticia)
                    <tr>
                        <td>{{ $Noticia->categoria }}</td>
                        <td>{{ $Noticia->titulo }}</td>
                        <td>{{ $Noticia->noticia }}</td>
                        <td>{{ $Noticia->descritivo_noticia }}</td>
                        <td>{{ $Noticia->imagem }}</td>
                        <td>{{ $Noticia->status }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('noticias.edit', $Noticia) }}">
                                <i class="fa-solid fa-pen-ruler"></i>
                                Editar
                            </a>
                            <a class="btn btn-danger" href="{{ route('noticias.destroy', $Noticia) }}">
                                <i class="fa-solid fa-trash-can"></i>
                                Excluir
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection