@extends('adminlte::page')

@section('title', 'Calendar')

@section('content_header')
    <h1>Calendar</h1>
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card card-primary">
      <div class="card-body p-0">
        <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">
        
        
         <label for="start_date">Start</label>

    <input type="datetime-local" name="start_date">

       <label for="end_date">End</label>

    <input type="datetime-local" name="end_date">
    <a href="{{ route('events.create') }} " class="btn btn-primary" >Submit</a>
    
    
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.css">
@stop

@section('js')
<script src="//cdn.jsdelivr.net/npm/fullcalendar@5.10.2/main.min.js" ></script>
<script>
$( document ).ready(function() {
    var calendar = new FullCalendar.Calendar($('#calendar')[0], {
      initialView: 'dayGridMonth',
      events: '/events-feed'
    });
    calendar.render();
})
</script>
@stop
