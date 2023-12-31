<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoriasNoticias;
use App\Models\Noticias;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Noticias = Noticias::all();
        $Categorias = CategoriasNoticias::all();
        return view('admin.noticias.index', [
            'Noticias' => $Noticias,
            'Categorias' => $Categorias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categorias = CategoriasNoticias::where('status', 1)->get();
        return view('admin.noticias.create', [
            'Categorias' => $Categorias,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'categoria' => 'required|integer',
            'titulo' => 'required|string',
            'noticia' => 'required|string',
            'descritivo_noticia' => 'required|string',
            'imagem' => 'required|image|mimes:jpg,png,gif',
            'status' => 'required|integer',
        ]);

        $dados = $request->all();

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = Str::slug($request->titulo) . '.' . $imagem->getClientOriginalExtension();


            Image::make($imagem)
                ->resize(300, 200)
                ->save(public_path('/storage/noticias/thumb/' . $nomeImagem));

            Image::make($imagem)
                ->resize(1024, 800)
                ->save(public_path('/storage/noticias/' . $nomeImagem));

            $dados['imagem'] = $nomeImagem;
        }

        Noticias::create($dados);

        return redirect()->back()->with('success', 'Notícia cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticias $id)
    {
        $Categorias = CategoriasNoticias::all();
        return view('admin.noticias.edit', [
            'Categorias' => $Categorias,
            'Noticia' => $id,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'categoria' => 'required|integer',
            'titulo' => 'required|string',
            'noticia' => 'required|string',
            'descritivo_noticia' => 'required|string',
            'imagem',
            'status' => 'required|integer',
        ]);

        $dados = $request->all();

        if ($request->hasFile('imagem')) {
            $imagem = $request->file('imagem');
            $nomeImagem = Str::slug($request->titulo) . '.' . $imagem->getClientOriginalExtension();


            Image::make($imagem)
                ->resize(300, 200)
                ->save(public_path('/storage/noticias/thumb/' . $nomeImagem));

            Image::make($imagem)
                ->resize(1024, 800)
                ->save(public_path('/storage/noticias/' . $nomeImagem));

            $dados['imagem'] = $nomeImagem;
        }

        Noticias::find($id)->update($dados);

        return redirect()->back()->with('success', 'Notícia alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Noticia)
    {
        Noticias::find($Noticia)->delete();

        return redirect()->back()->with('success', 'Item excluído com sucesso!');
    }
}
