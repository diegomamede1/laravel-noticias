@extends('base')

@section('content')
    <div class="mx-auto row">
        <div class="col-12">
            <table class="table table-striped">

                <tr>
                    <th>Categoria</th>
                    <th>Título</th>
                    <th>Imagem</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                @foreach ($Noticias as $Noticia)
                    <tr>
                        <td>{{ $Noticia->categoria }}</td>
                        <td>{{ $Noticia->titulo }}</td>
                        <td><img src="{{ asset('storage/noticias/' . $Noticia->imagem) }}" style="width: 100px;"></td>
                        <td>
                            @if ($Noticia->status == 1)
                                <span class="badge badge-success">
                                    Ativo
                                </span>
                            @else
                                <span class="badge badge-danger">
                                    Inativo
                                </span>
                            @endif
                        </td>
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
