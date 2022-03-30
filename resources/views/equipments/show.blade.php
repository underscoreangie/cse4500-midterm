@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
  <h2>{{ $equipment->category; }}</h2>
  <h2>{{ $equipment->hardwareSpecs; }}</h2>
  <h2>{{ $equipment->manufacture; }}</h2>
  <h2>{{ $equipment->saleInfo; }}</h2>
  <h2>{{ $equipment->contactInfo; }}</h2>
  <h2>{{ $equipment->userName; }}</h2>
  <h2>{{ $equipment->contact; }}</h2>
  <h2>{{ $equipment->invoice; }}</h2>
  <h2>{{ $equipment->price; }}</h2>
  <h2>{{ $equipment->purchaseDate; }}</h2>
  <h2>{{ $equipment->inovice; }}</h2>
@stop
