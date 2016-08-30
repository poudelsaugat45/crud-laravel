@extends ('layouts.layout')
@section('title')
  {{$crud->name}}
@stop

@section('body')
<table>
   {!!Form::model($crud, [
   'method' => 'patch',
   'route' => ['crud.update', $crud->id]
   ])!!}
   <tr>
    <td>
    {!! Form::label("sn", 'SN') !!} </td>
    <td>{!! Form::text("sn", $crud->sn) !!}</td>
</tr>
<tr>	<td>{!! Form::label("name", 'Name') !!}</td>
   <td> {!! Form::text("name", $crud->name) !!}</td>
   </tr>
    
      
    </table>
{!! Form::submit("Edit") !!}
    {!!Form::close()!!}
<br>
@stop