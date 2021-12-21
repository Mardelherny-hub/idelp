<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function __invoke()
    {
        $title = "Cursos en IDELP";
        return view('cursos')
        ->with('title',$title);

    }
}
