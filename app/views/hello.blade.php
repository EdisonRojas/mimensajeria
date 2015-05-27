@extends('layout')
@section('contenido')
	
	<div class="contenedor-interno">		
		
	<h2>Hola mensajeria</h2>
	
	<h5>--Bienvenido usuario--</h5>
	
	<a href="{{route('ingreso')}}" title="" class="btn btn-warning">Ingresar</a>
	<a href="{{route('registro')}}" title="" class="btn btn-success">Registrar</a>
	
	
	
       
</div>
@stop
