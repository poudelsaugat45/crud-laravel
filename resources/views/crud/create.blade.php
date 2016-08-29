@extends ('layouts.layout')

@section('title')
    About us
@stop

@section('body')
    {!!form::open(['route' as 'crud.store'])!!}
    
    {!!form::label('sn', 'sn')!!}
    {!!form::text('sn')!!}

    {!!form::label('name', 'name')!!}
    {!!form::text('name')!!}


    {!!form::submit('Create')!!}

@endforeach
<br>
@stop