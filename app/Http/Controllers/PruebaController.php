<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\PruebaMailable;
use Illuminate\Support\Facades\Mail;

class PruebaController extends Controller
{
    public function __invoke()
    {
        $correo = New PruebaMailable;
        Mail::to('alcaldevictor1@gmail.com')->send($correo);
        return "Mensaje Enviado";
}
}
