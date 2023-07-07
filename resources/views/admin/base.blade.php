<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notícias - @yield('titulo', 'Home')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="mx-auto row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ route('dashboard') }}">Notícias</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('admin.categorias.noticias.create') }}">Cadastrar Categoria de
                                Notícia</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('admin.categorias.noticias.index') }}">Gerenciar Categoria de
                                Notícia</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('admin.noticias.create') }}">Cadastrar Notícia</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('admin.noticias.index') }}">Gerenciar Notícia</a>
                        </li>

                    </ul>
                </div>
            </nav>

            @yield('content', '<h1>Home</h1>')
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>

</html>
