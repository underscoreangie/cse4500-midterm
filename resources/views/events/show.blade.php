@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
  <h2>{{ $events->title; }}</h2>
@stop
