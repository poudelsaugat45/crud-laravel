@extends ('layouts.layout')
@section('title')
  {{$crud->name}}
@stop

@section('body')
   {!!Form::open([
   'method' => 'delete',
   'route' => ['crud.destroy', $crud->id]
   ])!!}
    <table>

  <tr>
    <th>Name</th>
    <th>Sn</th>
    <th>ID</th>
  </tr>

  <tr>

    <td>{{$crud->name}}</td>
    <td>{{$crud->sn}}</td>
    <td>{{$crud->id}}</td>

    
   </tr>
   </table>

     {!! Form::submit("delete") !!}
     <a href="/crud/{{$crud->id}}/edit">Edit</a>
    {!!Form::close()!!}
    

@stop