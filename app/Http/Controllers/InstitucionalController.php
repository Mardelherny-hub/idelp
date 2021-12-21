<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitucionalController extends Controller
{
    public function __invoke()
    {
        $title = 'IDELP Institucional | Autoridades';
        return view('institucional')
        ->with('title', $title);
    }
}
