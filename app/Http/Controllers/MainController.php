<?php

namespace App\Http\Controllers;

use App\Curso;
use App\CursoUsuario;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    //

    public function index()
    {
        $usuarios = User::all();
        $cursos = Curso::all();

        $result = DB::table('cursos_usuarios')
            ->join('users', 'cursos_usuarios.user_id', '=', 'users.id')
            ->join('cursos', 'cursos_usuarios.curso_id', '=', 'cursos.id')
            ->select('cursos_usuarios.id', 'users.name', 'users.last_name', 'cursos.lenguaje')
            ->get();

        //dd($result);

        return view('index', compact('usuarios', 'cursos', 'result'));
    }

    public function create()
    {

        return view('registrar');
    }

    public function modificar()
    {

        return view('modificar');
    }

    public function inscribir()
    {
        $usuarios = User::all();
        $cursos = Curso::all();

        return view('inscribir', compact('usuarios', 'cursos'));
    }

    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request, [
            'user_id' => 'required',
            'curso_id' => 'required'
        ]);

        CursoUsuario::create([
            'user_id' => $request->user_id,
            'curso_id' => $request->curso_id
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        CursoUsuario::destroy($id);
        return back();
    }
}
