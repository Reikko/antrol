@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif

@section('content')
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Estatus</th>
        <th>Apodo</th>
        <th>Archivos</th>
        <th>Editar</th>
        <th>Baja</th>
        </thead>

        @foreach($ts as $t)
            <tbody>
            @if($t->estatus ==1)
                <tr class="success">
            @endif

            @if($t->estatus == 2)
                <tr class="info">
            @endif

            @if($t->estatus == 3)
                <tr class="danger">
                    @endif
            <td>{{$t->id}}</td>
            <td><img src="archivos/{{$t->foto}}" style="width: 100px"></td>
            <td>{{$t->nom_trab}} {{$t->ap_pat}} {{$t->ap_mat}}</td>
            <td>{{$t->puesto}}</td>
            <td>{{$t->estatus}}</td>
            <td>{{$t->alias}}</td>
            <td><a href="archivos/{{$t->renuncia}}" target="_blank"> Renuncia</a>
                <a href="archivos/{{$t->ife}}" target="_blank"> IFE</a><br>
                <a href="archivos/{{$t->curp}}" target="_blank"> CURP</a>
                <a href="archivos/{{$t->comp_dom}}" target="_blank"> DOMICILIO</a>
                <a href="archivos/{{$t->com_seguro}}" target="_blank"> SEGURO</a>
            </td>
            <td>Editar</td>
                    <td>Baja</td>
            </tr>
            </tbody>
        @endforeach
    </table>

@stop