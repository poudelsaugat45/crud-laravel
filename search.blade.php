@extends ('layouts.layout')

@section('title')
  Search results
@stop
@section('p')
@section('body')
    
    <table>

  <tr>
    <th>Name</th>
    <th>Sn</th>
    <th>ID</th>
    <th>Actions</th>
  </tr>
@foreach($cruds as $crud)
  <tr>

    <td><a href="/crud/{{$crud->id}}">{{$crud->name}}</a></td>
    <td>{{$crud->sn}}</td>
    <td>{{$crud->id}}</td>
    <td><li><a href="/crud/{{$crud->id}}/edit">Edit</a>
    </li>
    </td>


    @endforeach

   </tr>
   </table>

<br>
@stop