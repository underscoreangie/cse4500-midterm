@extends('adminlte::page')

@section('title', 'To Do List')

@section('content_header')
    <h1>Calender Events</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
  </div>
</div>

<a href="{{ route('events.create') }} " class="btn btn-primary" >Create</a>

@stop


@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
