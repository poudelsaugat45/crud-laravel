@extends ('layouts.layout')
@section('title')
  {{$crud->name}}
@stop

@section('body')
   {!!Form::model($crud, [
   'method' => 'patch',
   'route' => ['crud.update', $crud->id]
   ])!!}
    {!! Form::label("sn", 'sn') !!}
    {!! Form::text("sn", $crud->sn) !!}

	{!! Form::label("name", 'name') !!}
    {!! Form::text("name", $crud->name) !!}
    
      {!! Form::submit("Edit") !!}
    {!!Form::close()!!}
    

<br>
@stop