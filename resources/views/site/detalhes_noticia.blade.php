@extends('site.base')
@section('titulo', 'Home')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="title-header">Blog de Notícias</h3>
        </div>
        <div class="card-body text-center">
            <img src="{{ asset('storage/noticias/' . $Noticia->imagem) }}" class="card-img-top" alt="Imagem da notícia"
                style="width: 1000px; height: 500px;">
            <h1>{{ $Noticia->titulo }}</h1>
            <p>{{ $Noticia->noticia }}</p>
        </div>
        <a class="nav-link" href="{{ route('site.blog.index') }}"><button class="btn btn-danger">Voltar</button></a>
    </div>
@endsection
