@extends('admin.base')
@section('titulo', 'Noticia')

@section('content')

    <div class="card">
        <div class="card-header">
            <h3 class="title-header">Editar Notícias</h3>
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
            <form action="{{ route('admin.noticias.update', $Noticia) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <div class="mb-3 col-sm-12 col-lg-6">
                                <label for="categoria" class="form-label">Categoria:</label><br>
                                <select name="categoria" class="form-select" required>
                                    @foreach ($Categorias as $Categoria)
                                        <option value="{{ $Categoria->id }}">
                                            {{ $Categoria->categoria }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3 col-sm-12 col-lg-6">
                                <label for="status" class="form-label">Status:</label><br>
                                <select name="status" class="form-select">
                                    <option value="1" {{ $Noticia->status == 1 ? 'selected' : '' }}>Ativo</option>
                                    <option value="2" {{ $Noticia->status == 2 ? 'selected' : '' }}>Inativo</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="titulo" class="form-label">Título:</label><br>
                            <input type="text" name="titulo" value="{{ $Noticia->titulo }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Imagem: </label>
                            <input class="form-control" name="imagem" type="file" id="formFile" required>
                            <p>Imagem selecionada: {{ $Noticia->imagem }}</p>
                        </div>

                        <div class="mb-3">
                            <label for="noticia" class="form-label">Notícia:</label><br>
                            <textarea name="noticia" cols="30" rows="10" class="form-control" required>{{ $Noticia->noticia }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="descritivo_noticia" class="form-label">Descritivo da Noticia:</label><br>
                            <textarea name="descritivo_noticia" cols="30" rows="10" class="form-control" required>{{ $Noticia->descritivo_noticia }}</textarea>
                        </div>

                        <button type="submit"class="btn btn-success">
                            <i class="fa-solid fa-check"></i>
                            Enviar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
