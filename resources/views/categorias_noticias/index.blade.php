@extends('base')
@section('content')

    <div>
        <div >
            <table class="table table-striped">
                <tr>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                @foreach ($Categorias as $Categoria)
                    <tr>
                        <td>{{ $Categoria->categoria }}</td>
                        <td>
                            @if ($Categoria->status == 1)
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
                            <a class="btn btn-primary" href="{{ route('categorias.noticias.edit', $Categoria) }}">
                                <i class="fa-solid fa-pen-ruler"></i>
                                Editar
                            </a>
                            <a class="btn btn-danger" href="{{ route('categorias.noticias.destroy', $Categoria) }}">
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
