@extends('base')
@section('titulo', 'Cadastro de Noticia')

<div>
    <div>
        @section('content')
            <h1>Categorias de Notícias</h1>

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

            <form action="{{ route('categorias.noticias.store') }}" method="POST">
                @csrf
                <label for="categoria">Categoria:</label><br>
                <input type="text" name="categoria" id="categoria">
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
