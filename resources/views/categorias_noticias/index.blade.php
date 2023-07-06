@extends('base')

@section('content')
    <div class="mx-auto row">
        <div class="col-12">
            <table class="table table-striped">
                <tr>
                    <th>Categoria</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
                @foreach ($Categorias as $Categoria)
                    @if ($Categoria->status == 1)
                        <tr>
                            <td>{{ $Categoria->categoria }}</td>
                            <td>{{ $Categoria->status }}</td>
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
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection
