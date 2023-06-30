@extends('base')

@section('content')
    <h1>Cadastro de notícias</h1>

    <form action="">
        <label for="Categorias">Categorias:</label><br>
        <select name="">
            <option value=""></option>
        </select>
        <br>
        <br>
        <label for="Titulo">Titulo:</label><br>
        <input type="text" name="Titulo">
        <br>
        <br>
        <label for="Noticia">Noticia:</label><br>
        <textarea name="Noticia" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label for="DescritivoDaNoticia">Descritivo da Noticia:</label><br>
        <textarea name="DescritivoDaNoticia" cols="30" rows="10"></textarea>
        <br>
        <br>
        <label for="Imagem">Imagem:</label><br>
        <input type="file">
        <br>
        <br>
        <label for="Status">Status:</label><br>
        <select name="Status">
            <option value="1">Ativo</option>
            <option value="2">Inativo</option>
        </select>

    </form>
@endsection
