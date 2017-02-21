@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top: 5em">
        <div class="col-sm-10 col-sm-offset-1">


            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title">
                        <h2>Inscribir usuario</h2>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="{{url('/inscribir')}}" id="inscripcion" style="margin-bottom: 1em">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>Usuario: </label>
                            <select name="user_id" class="form-control">
                                @foreach($usuarios as $usuario)
                                    <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Curso: </label>
                            <select name="curso_id" class="form-control">
                                @foreach($cursos as $curso)
                                    <option value="{{$curso->id}}">{{$curso->nombre.' - '.$curso->lenguaje}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="hidden" name="accion" value="inscribirUsuarioACurso">
                        <button type="submit" class="btn btn-default btn-success">Inscribir usuario</button>

                        @include('includes.errors')
                    </form>
                    <div id="alertaUsuario" class="alert" role="alert" style="display: none;"></div>
                </div>
            </div>


        </div>
    </div>
@endsection