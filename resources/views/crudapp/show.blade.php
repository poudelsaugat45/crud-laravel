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
    <th>Created At</th>
    <th>Updated At</th>
  </tr>

  <tr>

    <td>{{$crud->name}}</td>
    <td>{{$crud->sn}}</td>
    <td>{{$crud->id}}</td>
    <td>{{$crud->updated_at}}</td>
    <td>{{$crud->created_at}}</td>

    
   </tr>
   </table>

     {!! Form::submit("delete") !!}
     <a href="/crud/{{$crud->id}}/edit">Edit</a>
    {!!Form::close()!!}
    

@stop