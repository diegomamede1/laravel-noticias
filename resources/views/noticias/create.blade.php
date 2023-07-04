@extends('base')

@section('titulo', 'Noticia')

<div class="mx-auto row">
    <div class="col-12">
        @section('content')
            <h1>Cadastro de Notícias</h1>

            @if (!empty(session('success')))
                {{ session('success') }}
            @endif

            @if ($errors->all())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
            @endif

            <form action="{{ route('noticias.store') }}" method="POST">
                @csrf
                <label for="categoria">Categoria:</label><br>
                <select name="categoria">
                    @foreach ($Categorias as $Categoria)
                        <option value="{{$Categoria->id}}">
                           {{$Categoria->categoria}}
                        </option>
                    @endforeach
                </select>
                <br>
                <br>
                <label for="titulo">Título:</label><br>
                <input type="text" name="titulo">
                <br>
                <br>
                <label for="noticia">Notícia:</label><br>
                <textarea name="noticia" cols="30" rows="10"></textarea>
                <br>
                <br>
                <label for="descritivo_noticia">Descritivo da Noticia:</label><br>
                <textarea name="descritivo_noticia" cols="30" rows="10"></textarea>
                <br>
                <br>
                <label for="imagem">Imagem:</label><br>
                <input type="file" name="imagem">
                <br>
                <br>
                <label for="status">Status:</label><br>
                <select name="status">
                    <option value="1">Ativo</option>
                    <option value="2">Inativo</option>
                </select>
                <br>
                <br>
                <button type="submit">Enviar</button>

            </form>
        </div>
    </div>
@endsection
