@extends('admin.base')
@section('titulo', 'Cadastro de Noticia')

@section('content')
    <h1>Editar Categoria</h1>

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

    <form action="{{ route('admin.categorias.noticias.update', $Categoria) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="categoria" class="form-label">Categoria:</label><br>
            <input type="text" name="categoria" value="{{ $Categoria->categoria }}" id="categoria" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label><br>
            <select name="status" class="form-select">
                <option value="1" {{ $Categoria->status == 1 ? 'selected' : '' }}>Ativo</option>
                <option value="2" {{ $Categoria->status == 2 ? 'selected' : '' }}>Inativo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            <i class="fa-solid fa-check"></i>
            Enviar
        </button>
    </form>
@endsection
