@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="title-header">Gerenciar Notícia</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th width="50%">Categoria</th>
                    <th width="10%">Título</th>
                    <th width="10%">Imagem</th>
                    <th width="10%">Status</th>
                    <th width="20%">Ações</th>
                </tr>
                @foreach ($Noticias as $Noticia)
                    @foreach ($Categorias as $Categoria)
                        <tr>
                            <td>{{ $Categoria->categoria }}</td>
                            <td>{{ $Noticia->titulo }}</td>
                            <td><img src="{{ asset('storage/noticias/thumb/' . $Noticia->imagem) }}" style="width: 100px;">
                            </td>
                            <td>
                                @if ($Noticia->status == 1)
                                    <span class="badge text-bg-success p-2 w-100">
                                        Ativo
                                    </span>
                                @else
                                    <span class="badge text-bg-danger p-2 w-100">
                                        Inativo
                                    </span>
                                @endif
                            </td>
                            <td>
                                <a class="btn btn-primary" href="{{ route('admin.noticias.edit', $Noticia) }}">
                                    <i class="fa-solid fa-pen-ruler"></i>
                                    Editar
                                </a>
                                <a class="btn btn-danger" href="{{ route('admin.noticias.destroy', $Noticia) }}">
                                    <i class="fa-solid fa-trash-can"></i>
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
        </div>
    </div>
@endsection
