<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index()
    {
        return "Bienvenido a la página de citas";
    }

    public function create()
    {
        return "Formulario para crear una nueva cita";
    }

    public function show($quote)
    {
        return "Mostrar la cita con ID: $quote";
    }
}
