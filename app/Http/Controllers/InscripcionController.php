<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class InscripcionController extends Controller
{
    public function index()
    {
        $title = 'Inscripción IDELP 2021 | Requisitos y Documentación';
        return view('contacto')
        ->with('title', $title);
    }
    public function contacto()
    {
        $title = 'Inscripción IDELP 2021 | Contacto';
        return view('inscripcion')
        ->with('title', $title);
    }
    public function store(Request $request)
    {
        $correo = new ContactoMailable($request->all());
        Mail::to('alcaldevictor1@gmail.com')->send($correo);
        $title = "Inscripción IDELP 2021 | Recibimos tu mensaje";
        return view('inscripcion')
        ->with('title', $title)
        ->with('nombre', strtoupper($request['nombre']));

    }
}
