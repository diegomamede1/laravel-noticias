@extends('base')

@section('titulo', 'Cadastro de Noticia')

<div class="mx-auto row">
    <div class="col-12">
        @section('content')
            <h1>Editar Categoria</h1>

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

            <form action="{{ route('categorias.noticias.update', $Categoria) }}" method="POST">
                @csrf
                <label for="categoria">Categoria:</label><br>
                <input type="text" name="categoria" value="{{ $Categoria->categoria }}" id="categoria">
                <br>
                <br>
                <label for="status">Status:</label><br>
                <select name="status">
                    <option value="1" {{$Categoria->status == 1 ? "selected" : ''}}>Ativo</option>
                    <option value="2" {{$Categoria->status == 2 ? "selected" : ''}}>Inativo</option>
                </select>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
@endsection
