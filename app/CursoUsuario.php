<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CursoUsuario extends Model
{
    protected $fillable = ['user_id', 'curso_id'];
}
