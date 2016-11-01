@extends('layouts.app')
@section('menu')
<div class="container">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">AZF</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Estado<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('edo.index', $title = 'Mostrar Estados')!!}</li>
                            <li>{!!link_to_route('edo.create', $title = 'Agregar Estado')!!}</li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Ciudades<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('cdad.index', $title = 'Mostrar Ciudades')!!}</li>
                            <li>{!!link_to_route('cdad.create', $title = 'Crear Ciudades')!!}</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Desarrollo<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('des.index', $title = 'Mostrar Desarrollo')!!}</li>
                            <li>{!!link_to_route('des.create', $title = 'Crear Desarrollo')!!}</li>
                        </ul>
                    </li>
                <!--<li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Calle/Edificio<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('calle.index', $title = 'Mostrar Calle o Edificio')!!}</li>
                            <li>{!!link_to_route('calle.create', $title = 'Crear Calle o Edificio')!!}</li>
                        </ul>
                    </li>-->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Clientes<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('client.index', $title = 'Mostrar Clientes')!!}</li>
                            <li>{!!link_to_route('client.create', $title = 'Crear Cliente')!!}</li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="/">Trabajadores<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>{!!link_to_route('trabajador.index', $title = 'Mostrar Trabajadores')!!}</li>
                            <li>{!!link_to_route('trabajador.create', $title = 'Crear Trabajadores')!!}</li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-pills navbar-nav navbar-right">
                    <li class = "active"><a data-toggle="pill" href="#inicio">Inicio</a></li>
                    <li ><a data-toggle="pill" href="#entrar"><span class="glyphicon glyphicon-log-in"></span> Entrar</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="tab-content">
        <div id="entrar" class="tab-pane fade ">
            <div class="container-fluid">
                <div class="col-sm-3" style="background-color:lavender;">
                </div>
                <div class="col-sm-6">
                    <div class="container-fluid">
                        <h2>Inicio de sesion</h2>
                        {!! Form::open(['route'=>'des.store','method'=>'POST','class'=>'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('Usuario:',null,['class'=>'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Usuario']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('Contraseña:',null,['class'=>'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'email']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label"></label>
                            <div class="col-sm-9">
                                {!! Form::submit('Entrar',['class'=>'btn btn-primary form-control']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>

                </div>

                <div class="col-sm-3" style="background-color:lavender;">
                </div>
            </div>
        </div>


        <div id="ver2" class="tab-pane fade">

        </div>

    </div>


    <!--<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>-->
</div>
@endsection
