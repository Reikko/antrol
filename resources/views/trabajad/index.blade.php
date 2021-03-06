@extends('layouts.app')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif

@section('completo')
    <table class="table table-hover table-condensed">
        <thead>
        <th>Id</th>
        <th>Foto</th>
        <th>Nombre</th>
        <th>Puesto</th>
        <th>Estatus</th>
        <th>Usuario</th>
        <th>Archivos</th>
        <th>Editar</th>
        </thead>

        @foreach($ts as $t)
            <tbody>
            @if($t->estatus ==0)
                <tr class="success">
            @endif
            @if($t->estatus ==1)
                <tr class="info">
            @endif

            @if($t->estatus == 2)
                <tr class="warning">
            @endif

            @if($t->estatus == 3)
                <tr class="danger">
            @endif
                    <td>{{$t->id}}</td>
                    <td>
                        @if($t->foto == 'imagen.jpg')
                            {{ Html::image(asset('imagen.jpg'),null,['class' => ' ','style'=>'width: 100px']) }}
                        @else
                            {{ Html::image(asset('archivos/'.$t->foto),null, ['class' => ' ','style'=>'width: 100px']) }}
                        @endif
                            <br>
                       {{link_to_route('trabajador.show', $title = 'VER PERFIL', $t->id,['class'=>'btn btn-success '])}}</td>
                    <td>{{$t->nom_trab}} {{$t->ap_pat}} {{$t->ap_mat}}</td>
                    <td>{{$t->puesto}}</td>
                    <td>{{$t->estatus}}</td>
                    <td>{{$t->alias}}</td>
                    <td>
                        @if($t->renuncia!='null')
                            <a href="archivos/{{$t->renuncia}}" target="_blank"> Renuncia</a><br>
                        @endif
                        @if($t->ife!='null')
                                <a href="archivos/{{$t->ife}}" target="_blank"> IFE</a><br>
                        @endif
                        @if($t->curp!='null')
                            <a href="archivos/{{$t->curp}}" target="_blank"> CURP</a><br>
                        @endif
                        @if($t->comp_dom!='null')
                            <a href="archivos/{{$t->comp_dom}}" target="_blank"> DOMICILIO</a><br>
                        @endif
                        @if($t->com_seguro!='null')
                            <a href="archivos/{{$t->com_seguro}}" target="_blank"> SEGURO</a><br>
                        @endif
                    </td>
                    <td>{!!link_to_route('trabajador.edit', $title = 'Editar', $parameters = $t->id, $attributes = ['class'=>'btn btn-primary btn-block'])!!}</td>
                </tr>
            </tbody>
        @endforeach
    </table>
@stop