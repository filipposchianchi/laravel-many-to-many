@extends('layouts.base')

@section('content')

<h3>[{{$employee -> id}}] {{$employee -> name}} {{$employee -> lastname}}</h3>

<p>Con task:</p>

<ul>
    @foreach ($employee -> tasks as $task )
    <li>[{{$task -> id}}] - Titolo: {{$task -> title}} <br>
        Descrizione: {{$task -> description}}
    </li>

    <br>
        
    @endforeach
</ul>
    
@endsection