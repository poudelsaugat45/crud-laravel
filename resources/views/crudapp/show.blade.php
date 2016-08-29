@extends ('layouts.layout')
@section('title')
  {{$crud->name}}
@stop

@section('body')
   {!!Form::open([
   'method' => 'delete',
   'route' => ['crud.destroy', $crud->id]
   ])!!}
    <h1>{{$crud->name}}</h1>
    <h1>{{$crud->sn}}</h1>
     {!! Form::submit("delete") !!}
    {!!Form::close()!!}
    

<br>
@stop