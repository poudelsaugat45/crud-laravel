@extends ('layouts.layout')

@section('title')
    About us
@stop

@section('body')
  
   {!!Form::open(['route' => 'crud.store'])!!}
  <table><td>  {!! Form::label("sn", 'Sn') !!}</td>
   <td> {!! Form::text("sn") !!}</td>
<br>

<br>

<tr><td>
	{!! Form::label("name", 'Name') !!}</td>
	<td>
    {!! Form::text("name") !!}</td>
    </tr>
    <br>
    <br>
     
    </table>
     {!! Form::submit("create") !!}

    {!!Form::close()!!}
@stop

<br>
