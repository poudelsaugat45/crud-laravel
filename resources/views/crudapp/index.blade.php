@extends ('layouts.layout')

@section('title')
  All rows
@stop
@section('p')
@section('body')
    
    <table>

  <tr>
    <th>Name</th>
    <th>Sn</th>
    <th>ID</th>
  </tr>
@foreach($cruds as $crud)
  <tr>

    <td><a href="/crud/{{$crud->id}}">{{$crud->name}}</a></td>
    <td>{{$crud->sn}}</td>
    <td>{{$crud->id}}</td>

    @endforeach
   </tr>
   </table>

<br>
@stop