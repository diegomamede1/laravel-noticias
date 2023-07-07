<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Noticias;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        $Noticias = Noticias::all();
        return view('admin.dashboard',[
            'Noticias' => $Noticias
        ]);
    }
}
