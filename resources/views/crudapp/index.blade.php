@extends ('layouts.layout')

@section('title')
  All rows
@stop


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

    <td>{{$crud->name}}</td>
    <td>{{$crud->sn}}</td>
    <td>{{$crud->id}}</td>
    <td>
     <li>
          <a href="/crud/{{$crud->id}}/edit">
          <span class="glyphicon glyphicon-pencil" aria-hidden="true">
            
          </span></a>
    <a href="/crud/{{$crud->id}}">
      </li>
    </td>


    @endforeach

   </tr>
   </table>

<br>
@stop