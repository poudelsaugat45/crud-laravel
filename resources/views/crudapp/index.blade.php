@extends ('layouts.layout')

@section('title')
  All rows
@stop

@section('body')
    @foreach($cruds as $crud)
    <h1>{{$crud->name}}</h1>
    <h1>{{$crud->sn}}</h1>
@endforeach
<br>
@stop