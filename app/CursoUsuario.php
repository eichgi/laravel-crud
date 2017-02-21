<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoUsuario extends Model
{
    protected $table = 'cursos_usuarios';
    protected $fillable = ['user_id', 'curso_id'];
}
