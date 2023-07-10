@extends('admin.base')
@section('titulo', 'Cadastro de Noticia')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="title-header">Cadastrar Categoria</h3>
        </div>
        <div class="card-body">
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

            <form action="{{ route('admin.categorias.noticias.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria:</label><br>
                    <input type="text" name="categoria" id="categoria" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status:</label><br>
                    <select name="status" class="form-select">
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">
                    <i class="fa-solid fa-check"></i>
                    Enviar
                </button>
            </form>
        </div>
    </div>
@endsection
