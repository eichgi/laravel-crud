@extends('layouts.master')

@section('content')
    <div class="row" style="margin-top: 5em">
        <div class="col-xs-12">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2>Usuarios</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="tablaUsuarios"
                               class="table table-striped table-responsive table-bordered table-hover">
                            <thead>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>EDAD</th>
                            <th>ACCIONES</th>
                            </thead>
                            <tbody>
                            @foreach($usuarios as $usuario)
                                <tr>
                                    <td>{{$usuario->id}}</td>
                                    <td>{{$usuario->name.' '.$usuario->last_name}}</td>
                                    <td>{{$usuario->age}}</td>
                                    <td>
                                    <span class="acciones">
                                        <a href="/crud_laravel/public/modificar/usuario/{{$usuario->id}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{url("/usuario/delete/$usuario->id")}}">
                                            <i class="fa fa-times"></i>
                                        </a>
                                    </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2>Cursos</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="tablaCursos" class="table table-striped table-responsive table-bordered table-hover">
                            <thead>
                            <th>NOMBRE</th>
                            <th>LENGUAJE</th>
                            <th>COSTO</th>
                            <th>ACCIONES</th>
                            </thead>
                            <tbody>
                            @foreach($cursos as $curso)
                                <tr>
                                    <td>{{$curso->nombre}}</td>
                                    <td>{{$curso->lenguaje}}</td>
                                    <td>{{$curso->costo}}</td>
                                    <td>
                                        <span class="acciones">
                                        <a href="/crud_laravel/public/modificar/curso/{{$curso->id}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{url("/curso/delete/$curso->id" )}}" class="eliminarCurso">
                                            <i class="fa fa-times"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-sm-10 col-sm-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-title text-center">
                            <h2>Inscripciones</h2>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table id="tablaCursos" class="table table-striped table-responsive table-bordered table-hover">
                            <thead>
                            <th>USUARIO</th>
                            <th>LENGUAJE</th>
                            {{--<th>COSTO</th>--}}
                            <th>ACCIONES</th>
                            </thead>
                            <tbody>
                            @foreach($result as $res)
                                <tr>
                                    <td>{{$res->name.' '.$res->last_name}}</td>
                                    <td>{{$res->lenguaje}}</td>
                                    {{--<td>{{$curso->costo}}</td>--}}
                                    <td>
                                        <span class="acciones">
                                        <a href="#">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a href="{{url("/inscripcion/delete/$curso->id" )}}" class="eliminarCurso">
                                            <i class="fa fa-times"></i>
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection