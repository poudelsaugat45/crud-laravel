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

    <td><a href="/crud/{{$crud->id}}">{{$crud->name}}</a></td>
    <td>{{$crud->sn}}</td>
    <td>{{$crud->id}}</td>
    <td><li><a href="/crud/{{$crud->id}}/edit"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></a>
    <td><div class="alert alert-danger" role="alert">
  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  <span class="sr-only">Error:</span>
  Enter a valid email address
</div></td>
    </li>
    </td>


    @endforeach

   </tr>
   </table>

<br>
@stop