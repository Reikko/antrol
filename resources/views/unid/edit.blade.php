@extends('layouts.app')
@section('completo')
    @include('modal.calle')
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{Session::get('message')}}
        </div>
    @endif
    <table class="table table-bordered table-hover">

        <thead>
        <th>id</th>
        <th>Nombre de la Calle</th>
        <th>Numero Exterior</th>
        <th>Numero Interior</th>
        <th>Editar</th>
        </thead>
        <td></td>
        <td>{!! Form::select('id_calle', $calles,1,['class'=>'form-control']) !!}
            {!! Form::button('Agregar Calle',[
            'class'=>'form-control btn btn-default btn-md',
            'data-toggle'=>'modal',
            'data-target'=>'#modCalle',
            'data-backdrop'=>'static' ]) !!}
            Todos igual {!!Form::checkbox('allCalle', 'value',false)!!}</td>
        <td>{!! Form::text('all_Ext',null,['class'=>'form-control']) !!}
            Todos igual {!!Form::checkbox('allExt', 'value',false)!!}</td>
        <td></td>
        <td><button type="button" class="btn btn-info">
                <span class="glyphicon glyphicon-lock"></span> Block
            </button>
        </td>
    {!! Form::model($unidades,['route'=>['unidad.update',$id],'method'=>'PUT']) !!}
        <!--Inicio del formulario-->
        @foreach($unidades as $key => $unidad)
            <tbody>
            <td>{{$key+1}}{!! Form::hidden('unidades[]',$unidad->id,['class'=>'form-control']) !!}</td>
            <td>{!! Form::select('id_calle[]', $calles,$unidad->id_calle,['class'=>'form-control' ]) !!}</td>
            <td>{!! Form::text('num_ext[]',$unidad->num_ext,['class'=>'form-control']) !!}</td>
            <td>{!! Form::text('num_int[]',$unidad->num_int,['class'=>'form-control']) !!}</td>
            <td>{{$unidad->editable}}</td>
            </tbody>
        @endforeach

    </table>
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop