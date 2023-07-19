@extends('site.base')
@section('titulo', 'Home')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="title-header">Blog de Notícias</h3>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    @foreach ($Noticias as $Noticia)
                        <div class="col-12">
                            <div class="row align-items-center"> <!-- Adicionei a classe "align-items-center" aqui -->
                                <div class="col-2 text-center"> <!-- Adicionei a classe "text-center" aqui -->
                                    <a href="{{ route('site.blog.show', $Noticia) }}">
                                        <img src="{{ asset('storage/noticias/' . $Noticia->imagem) }}" class="card-img-top"
                                            alt="Imagem da notícia">
                                    </a>
                                </div>
                                <div class="col-10">
                                    <div class="card-body">
                                        <a href="{{ route('site.blog.show', $Noticia) }}"
                                            style="text-decoration: none; color: inherit;">
                                            <h1>{{ $Noticia->titulo }}</h1>
                                            <p>{{ $Noticia->descritivo_noticia }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
