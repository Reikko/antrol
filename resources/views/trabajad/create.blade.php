@extends('layouts.app')
@section('completo')
    <div class="container-fluid">
        <h2>Registro de trabajadores</h2>
        {!! Form::open(['route'=>'trabajador.store','method'=>'POST','class'=>'form-horizontal','files'=> true]) !!}
        <div class="form-group">
            <div class="col-sm-3">
            </div>
            {!! Form::label('FOTO',null,['class'=>'control-label col-sm-3']) !!}

            <div class="col-sm-3">
                {!!Form::label('Subir Foto',null,['class'=>''])!!}
                {!!Form::file('foto')!!}
            </div>
            <div class="col-sm-3">
            </div>
        </div>
            <div class="form-group">
                {!! Form::label('NOMBRE COMPLETO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('nom_trab',null,['class'=>'form-control','placeholder'=>'Nombre','required' => 'required']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno','required' => 'required']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno','required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('ESTADO CIVIL',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::select('edo_civil',['Soltero'=>'Soltero','Casado'=>'Casado'],'Soltero',['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::label('SEXO',null,['class'=>'control-label col-sm-3']) !!}
                    <div class="col-sm-9">
                        {!! Form::select('sexo',['Masculino'=>'Masculino','Femenino'=>'Femenino'],'Masculino',['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    {!! Form::label('ALIAS',null,['class'=>'control-label col-sm-3']) !!}
                    <div class="col-sm-9">
                        {!! Form::text('alias',null,['class'=>'form-control','placeholder'=>'Nombre de usuario']) !!}
                    </div>
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('FECHA DE NACIMIENTO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    <input type="date" name="fecha_nac" class="form-control col-sm-9" required="true">
                </div>
                {!! Form::label('LUGAR DE NACIMIENTO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::select('lug_nac',['San Luis Potosi'=>'San Luis Potosi','Queretaro'=>'Queretaro'],'San Luis Potosi',['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('DOMICILIO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('calle',null,['class'=>'form-control','placeholder'=>'Calle','required' => 'required']) !!}
                </div>
                <div class="col-sm-3">
                    <div class="col-sm-6">
                        {!! Form::text('num_ext',null,['class'=>'form-control','placeholder'=>'Num Ext','required' => 'required']) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! Form::text('num_int',null,['class'=>'form-control','placeholder'=>'Num Int']) !!}
                    </div>
                </div>
                <div class="col-sm-3">
                    {!! Form::text('colonia',null,['class'=>'form-control','placeholder'=>'Colonia' ,'required' => 'required']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('estado',null,['class'=>'form-control','placeholder'=>'Ciudad','required' => 'required']) !!}
                </div>
                <div class="col-sm-3">
                    {!! Form::text('municipio',null,['class'=>'form-control','placeholder'=>'Municipio','required' => 'required']) !!}
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('PUESTO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('puesto',null,['class'=>'form-control','placeholder'=>'Puesto']) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('RFC',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::text('rfc',null,['class'=>'form-control','placeholder'=>'RFC']) !!}
                </div>
                <div class="col-sm-3">
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('RENUNCIA',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">

                    <!--{{link_to('archivos/r.docx','Descargar',['download'=>'Renuncia'])}}-->
                        <button type="button" class="btn btn-success btn-lg btn-block" onclick="Valida_Campos()"> Descargar Renuncia </button>
                </div>
                <div class="col-sm-6">
                    {!!Form::label('Adjuntar renuncia',null,['class'=>''])!!}
                    {!!Form::file('renuncia',['required' => 'required'])!!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('IFE',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-6">
                    {!!Form::label('Adjuntar IFE',null,['class'=>''])!!}
                    {!!Form::file('ife')!!}
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('CURP',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-6">
                    {!!Form::label('Adjuntar curp',null,['class'=>''])!!}
                    {!!Form::file('curp')!!}
                </div>
                <div class="col-sm-3">
                </div>
            </div>

            <div class="form-group">
                {!! Form::label('COMPROBANTE DE DOMICILIO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-6">
                    {!!Form::label('Adjuntar Comprobante de domicilio',null,['class'=>''])!!}
                    {!!Form::file('comp_dom')!!}
                </div>
                <div class="col-sm-3">
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('NUMERO DE SEGURO',null,['class'=>'control-label col-sm-3']) !!}
                <div class="col-sm-3">
                    {!! Form::select('estatus',['1'=>'Completo-Lo tengo','2'=>'Consultar-Lo tengo','3'=>'Generar'],'1',['class'=>'form-control']) !!}
                </div>
                <div class="col-sm-2">
                    {!! Form::text('num_seguro',null,['class'=>'form-control','placeholder'=>'Numero de Seguro']) !!}
                </div>
                <div class="col-sm-4">
                    {!!Form::label('Adjuntar Comprobante de seguro',null,['class'=>''])!!}
                    {!!Form::file('com_seguro')!!}
                </div>
            </div>
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop