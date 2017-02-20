<?php

namespace App\Http\Controllers;

use App\Curso;
use App\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //

    public function index()
    {
        $usuarios = User::all();
        $cursos = Curso::all();

        return view('index', compact('usuarios', 'cursos'));
    }

    public function create()
    {

        return view('registrar');
    }

    public function modificar()
    {

        return view('modificar');
    }
}
