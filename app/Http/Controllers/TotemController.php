<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TotemController extends Controller
{
    public function index()
    {
        return view('totems.unidade2.index');
    }

    public function atendimento_senhas()
    {
        return view('totems.unidade2.atendimento_senhas');
    }


}
