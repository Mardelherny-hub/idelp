<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarreraController extends Controller
{
    public function __invoke()
    {
        $title = "Carrera: Programa de Estudios";
        return view('carrera-programas-de-estudio')
            ->with('title',$title);
    }
}
