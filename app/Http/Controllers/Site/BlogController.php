<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\CategoriasNoticias;
use App\Models\Noticias;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $Noticias = Noticias::where('status', 1)->get();
        $Categorias = CategoriasNoticias::where('status', 1)->get();
        return view('site.blog', [
            'Noticias' => $Noticias,
            'Categorias' => $Categorias,
        ]);
    }
}
