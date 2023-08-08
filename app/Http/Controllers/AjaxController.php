<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function ConsultasNascimento(Request $request){
        // dd($request->nascimento);

        $nao_valida = true;
        if($nao_valida){
            return response()->json(['status' => 201, 'msgn' => 'Data de nascimento inválida!']);
        }
    }
}
