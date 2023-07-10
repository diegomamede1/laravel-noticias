<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\CategoriasNoticias;
use Illuminate\Http\Request;

class CategoriasNoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Categorias = CategoriasNoticias::all();

        return view('admin.categorias_noticias.index', [
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
        return view('admin.categorias_noticias.create');
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
            'categoria' => 'required|string',
            'status' => 'required|integer',
        ]);

        CategoriasNoticias::create($request->all());

        return redirect()->back()->with('success', 'Categoria cadastrada com sucesso!');
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
    public function edit($Categoria)
    {
        $Categoria = CategoriasNoticias::find($Categoria);
        return view('admin.categorias_noticias.edit',[
            'Categoria' => $Categoria
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
            'categoria' => 'required|string',
            'status' => 'required|integer',
        ]);

        CategoriasNoticias::find($id)->update($request->all());

        return redirect()->back()->with('success', 'Categoria alterada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Categoria)
    {
        CategoriasNoticias::find($Categoria)->delete();

        return redirect()->back()->with('success', 'Item excluído com sucesso!');
    }
}
