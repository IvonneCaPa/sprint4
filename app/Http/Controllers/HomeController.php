<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //solo admin una ruta
    {
        return "Bienvenido a la página de inicio";
    }
}
