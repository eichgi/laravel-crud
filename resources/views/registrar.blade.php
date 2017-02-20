@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top: 5em">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h2>Registrar Usuario</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form id="nuevoUsuario" style="margin-bottom: 1em" method="POST"
                              action="/crud_laravel/public/registrar/usuario">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="form-group">
                                <label>Apellido: </label>
                                <input type="text" class="form-control" name="last_name">
                            </div>
                            <div class="form-group">
                                <label>Edad: </label>
                                <input type="number" class="form-control" name="age">
                            </div>
                            <input type="hidden" name="accion" value="registrarUsuario">
                            <button type="submit" class="btn btn-default btn-success">Registrar usuario</button>

                            @include('includes.errors')
                        </form>
                        <div id="alertaUsuario" class="alert" role="alert" style="display: none"></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h2>Registrar Curso</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form id="nuevoCurso" style="margin-bottom: 1em" method="POST"
                              action="{{url('/registrar/curso')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label>Nombre: </label>
                                <input type="text" class="form-control" name="nombre">
                            </div>
                            <div class="form-group">
                                <label>Lenguaje: </label>
                                <input type="text" class="form-control" name="lenguaje">
                            </div>
                            <div class="form-group">
                                <label>Costo: </label>
                                <input type="number" step="any" class="form-control" name="costo">
                            </div>
                            <input type="hidden" name="accion" value="registrarCurso">
                            <button type="submit" class="btn btn-default btn-success">Registrar curso</button>

                            @include('includes.errors')
                        </form>
                        <div id="alertaCurso" class="alert" role="alert" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection