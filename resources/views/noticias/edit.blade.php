@extends('base')
@section('titulo', 'Noticia')

<div class="mx-auto row">
    <div class="col-12">
        @section('content')
            <h1>Atualizar Notícia {{ $Noticia->titulo }}</h1>

            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->all())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('noticias.update', $Noticia) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="categoria">Categoria:</label><br>
                <select name="categoria">
                    @foreach ($Categorias as $Categoria)
                        <option value="{{ $Categoria->id }}" {{ $Categoria->id == $Noticia->categoria ? 'selected' : '' }}>
                            {{ $Categoria->categoria }}
                        </option>
                    @endforeach
                </select>
                <br>
                <br>
                <label for="titulo">Título:</label><br>
                <input type="text" name="titulo" value="{{ $Noticia->titulo }}">
                <br>
                <br>
                <label for="noticia">Notícia:</label><br>
                <textarea name="noticia" cols="30" rows="10">{{ $Noticia->noticia }}</textarea>
                <br>
                <br>
                <label for="descritivo_noticia">Descritivo da Noticia:</label><br>
                <textarea name="descritivo_noticia" cols="30" rows="10">{{ $Noticia->descritivo_noticia }}</textarea>
                <br>
                <br>
                <label for="imagem">Imagem:</label><br>
                <input type="file" name="imagem">
                <p>Imagem selecionada: {{ $Noticia->imagem }}</p>
                <br>
                <label for="status">Status:</label><br>
                <select name="status">
                    <option value="1" {{ $Noticia->status == 1 ? 'selected' : '' }}>Ativo</option>
                    <option value="2" {{ $Noticia->status == 2 ? 'selected' : '' }}>Inativo</option>
                </select>
                <br>
                <br>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection
