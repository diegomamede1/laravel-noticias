@extends('base')

@section('titulo', 'Cadastro de Noticia')

@section('content')
    <h1>Categorias de Notícias</h1>

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

    <form action="{{ route('categorias.noticias.store') }}" method="post">
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

        <button type="submit">Enviar</button>
    </form>
@endsection
