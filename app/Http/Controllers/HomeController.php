<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $title = "Instituto de Desarrollo Laboral y Profesional";
        return view('home')
            ->with('title',$title);
    }
}
