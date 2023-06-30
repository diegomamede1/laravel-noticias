@extends('base')


@section('content')
    @foreach ($CategoriasNoticias as $CategoriaNoticia)
        <a href="{{ route('categorias.noticias.show', $CategoriaNoticia) }}">
            <table>
                {{ $CategoriaNoticia->categoria }} <br>
                {{ $CategoriaNoticia->status }} <br>
            </table>
        </a>
        <hr>
    @endforeach
@endsection
