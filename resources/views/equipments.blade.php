@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Equipment</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">Category</th><th>Hardware Specs</th><th>Manufacture</th><th>Manu Sale Info</th><th>Manu Contact Info</th><th>User Name</th><th>User Contact</th><th>Invoice</th><th>Price</th><th>Purchase Date</th><th style="width: 40px">View Info</th>
        </tr>
      </thead>
      <tbody>

        @foreach($equipments AS $equipment)
        <tr>
          <td>{{ $equipment->id }}</td>
          <td>{{ $equipment->category }}</td>
          <td>{{ $equipment->hardwareSpecs }}</td>
          <td>{{ $equipment->manufacture }}</td>
          <td>{{ $equipment->saleInfo }}</td>
          <td>{{ $equipment->contactInfo }}</td>
          <td>{{ $equipment->userName }}</td>
          <td>{{ $equipment->invoice }}</td>
          <td>{{ $equipment->price }}</td>
          <td>{{ $equipment->purchaseDate }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('equipments.show',['equipment'=>$equipment->id]) }}">View</a></td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('equipments.create') }} " class="btn btn-primary" >Add Equipment</a>
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    } );
</script>
@stop
