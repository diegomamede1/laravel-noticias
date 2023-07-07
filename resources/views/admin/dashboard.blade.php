@extends('base')
@section('titulo', 'DashBoard')

@section('content')
    <table>
        <thead>
            <tr>
                <td>Noticia</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($Noticias as $Noticia)
                <tr>
                    <td>{{ $Noticia->noticia }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
