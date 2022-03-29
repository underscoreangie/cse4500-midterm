@extends('adminlte::page')

@section('title', 'Equipment')

@section('content_header')
    <h1>Creating Info For Equipment</h1>
@stop

@section('content')
<form method="post" action="{{ route('equipments.store') }}" >
    @csrf
    <x-adminlte-input name="title" label="Category" />
    <x-adminlte-input name="title" label="Hardware Specs" />
    <x-adminlte-input name="title" label="Manufacture" />
    <x-adminlte-input name="title" label="Manufacture Sale Info" />
    <x-adminlte-input name="title" label="Manufacture Contact Info" />
    <x-adminlte-input name="title" label="User Name" />
    <x-adminlte-input name="title" label="Contact" />
    <x-adminlte-input name="progress" type="number" min=0 max=1000 label="Invoice #" />
    <x-adminlte-input name="progress" type="number" min=0 max=1000 label="Price" />
    <x-adminlte-input name="progress" type="number" min=0 max=100 label="Purchase Date" />
    <x-adminlte-button type="Submit" label="Submit" />
</form>
@stop
