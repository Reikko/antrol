@extends('layouts.app')
@section('completo')

    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3"></div>
        <div class="col-sm-3">
            {!! link_to_route('nuevas.show','Regresar',$id, ['class' => 'btn btn-default btn-block']) !!}
        </div>
    </div><br>

    <div class="row">
        <div class="col-sm-8">
            <div class="panel panel-success">
                <div class="panel-heading">Reportes</div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Fecha Reporte</th>
                            <th>Fecha fin</th>
                            <th>Estado</th>
                            <th>Ver</th>
                            <th>Editar</th>
                        </thead>
                    @foreach($reportes as $num => $reporte)
                        <tbody>
                            <td>{{$num + 1}}</td>
                            <td>{{$reporte->fecha_ini}}</td>
                            <td>{{$reporte->fecha_fin}}</td>
                            <td>Abierto</td>
                            <td>{!! link_to_route('tabla.show','Ver',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}</td>
                            <td>{!! link_to_route('tabla.edit','Editar',$reporte->id, ['class' => 'btn btn-success btn-block']) !!}</td>
                        </tbody>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel panel-info">
                <div class="panel-heading">Nuevo Reporte</div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'reporte.store','method'=>'POST']) !!}
                    {{ Form::hidden('id_prop', $id) }}
                    @foreach($inquilinos as $inq)
                        {{ Form::radio('inqui', $inq->id_prop) }} {{$inq->nom_inquilino}} {{$inq->ap_pat}} <br>
                    @endforeach

                        {!! Form::submit('Nuevo Reporte',['class'=>'btn btn-primary']) !!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="panel panel-success">
            <div class="panel-heading">Reportes</div>
            <div class="panel-body">
                <h5>Estado: {{$dir->estado}}</h5>
                <h5>Municipio: {{$dir->municipio}}</h5>
                <h5>{{$dir->tipo}}: {{$dir->asentamiento}}</h5>
                <h5>Tipo de zona: {{$dir->zona}}</h5>
                <h5>Tipo de Propiedad: {{$ts->tipo_prop}}</h5>
                <h5>Calle : {{$ts->calle}}</h5>
                <h5>Código Postal: {{$dir->cp}}</h5>
                <h5>Numero Exterior: {{$ts->num_ext}}</h5>
                <h5>Numero Interior: {{$ts->num_int}}</h5>
            </div>
        </div>
    </div>
@stop