<?php

namespace App\Http\Controllers;

use App\Models\CategoriasNoticias;
use App\Models\Noticias;
use Illuminate\Http\Request;

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

        return view('noticias.index', [
            'Noticias' => $Noticias,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categorias = CategoriasNoticias::all();
        return view('noticias.create', [
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
            'imagem',
            'status' => 'required|integer',
        ]);

        Noticias::create($request->all());

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
        return view('noticias.edit', [
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

        Noticias::find($id)->update($request->all());

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
