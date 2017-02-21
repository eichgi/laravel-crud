@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top: 5em">
        <div class="col-xs-12">
            <div class="col-sm-10 col-sm-offset-1">
                <div id="panel-curso" class="panel panel-default" style="display: auto;">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2>Modificar Curso</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{url("/modificar/curso/$curso->id")}}" id="actualizarCurso"
                              style="margin-bottom: 1em">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" name="nombre" value="{{$curso->nombre}}">
                            </div>
                            <div class="form-group">
                                <label>Lenguaje: </label>
                                <input type="text" class="form-control" name="lenguaje" value="{{$curso->lenguaje}}">
                            </div>
                            <div class="form-group">
                                <label>Costo: </label>
                                <input type="number" step="any" class="form-control" name="costo"
                                       value="{{$curso->costo}}">
                            </div>
                            <input type="hidden" name="accion" value="actualizarCurso">
                            <button type="submit" class="btn btn-default btn-success">Actualizar curso</button>
                        </form>
                        <div id="alertaCurso" class="alert" role="alert"></div>
                    </div>
                </div>

                {{--<div id="panel-usuario" class="panel panel-default" style="display: auto;">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2>Modificar Usuario</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="POST" action="{{url("/modificar/usuario/$usuario->id")}}" id="actualizarUsuario"
                              style="margin-bottom: 1em">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="form-group">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" name="nombre" value="{{$usuario->name}}">
                            </div>
                            <div class="form-group">
                                <label>Apellido: </label>
                                <input type="text" class="form-control" name="apellido" value="{{$usuario->last_name}}">
                            </div>
                            <div class="form-group">
                                <label>Edad: </label>
                                <input type="number" class="form-control" name="edad" value="{{$usuario->age}}">
                            </div>
                            <input type="hidden" name="accion" value="actualizarUsuario">
                            <button type="submit" class="btn btn-default btn-success">Actualizar usuario</button>
                        </form>
                        <div id="alertaUsuario" class="alert" role="alert"></div>
                    </div>
                </div>--}}
            </div>
        </div>
    </div>
@endsection