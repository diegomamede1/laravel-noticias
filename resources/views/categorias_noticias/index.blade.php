@extends('base')


@section('content')
    {{-- <a href="{{ route('categorias.noticias.index', $Categoria) }}"> --}}
    <table class="table table-striped">

        <tr>
            <th>Categoria</th>
            <th>Status</th>

        </tr>
        @foreach ($Categorias as $Categoria)
            <tr>
                <td>{{ $Categoria->categoria }}</td>
                <td>{{ $Categoria->status }}</td>
                <td>
                    {{-- <a class="btn btn-primary" href="{{ route('pessoas.edit', $Pessoa) }}">
                                <i class="fa-solid fa-pen-ruler"></i>
                                Editar
                            </a>
                            <a class="btn btn-danger" href="{{ route('pessoas.destroy', $Pessoa) }}">
                                <i class="fa-solid fa-trash-can"></i>
                                Excluir
                            </a> --}}
                </td>
            </tr>
        @endforeach
    </table>
@endsection
