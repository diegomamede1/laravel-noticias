@extends('admin.base')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="title-header">Gerenciar Categoria</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <tr>
                    <th width="70%">Categoria</th>
                    <th width="10%">Status</th>
                    <th width="20%">Ações</th>
                </tr>
                @foreach ($Categorias as $Categoria)
                    <tr>
                        <td>{{ $Categoria->categoria }}</td>
                        <td>
                            @if ($Categoria->status == 1)
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
                            <a class="btn btn-primary" href="{{ route('admin.categorias.noticias.edit', $Categoria) }}">
                                <i class="fa-solid fa-pen-ruler"></i>
                                Editar
                            </a>
                            <a class="btn btn-danger" href="{{ route('admin.categorias.noticias.destroy', $Categoria) }}">
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
