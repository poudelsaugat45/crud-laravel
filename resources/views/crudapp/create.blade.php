@extends ('layouts.layout')

@section('title')
    About us
@stop

@section('body')
  
   {!!Form::open(['route' => 'crud.store'])!!}
   

    {!! Form::label("sn", 'sn') !!}
    {!! Form::text("sn") !!}

	{!! Form::label("name", 'name') !!}
    {!! Form::text("name") !!}
    
      {!! Form::submit("create") !!}

    {!!Form::close()!!}
@stop

<br>
