@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
  <h2>{{ $equipment->hardwareSpecs; }}</h2>
  <div><p>{{ $equipment->userName; }}% finished</p></div>
  <h2>{{ $equipment->inovice; }}</h2>
@stop
