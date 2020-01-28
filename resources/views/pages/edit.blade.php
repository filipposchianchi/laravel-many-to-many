@extends('layouts.base')

@section('content')

    <form action="{{route('employee.update', $employee->id)}}" method="post">
    @csrf
    @method('POST')
    <label>Nome</label> <br>
    <input type="text" name="name" placeholder="Inserisci il nome" value="{{$employee->name}}">

    <br>

    <label>Cognome</label> <br>
    <input type="text" name="lastname" placeholder="Inserisci il cognome" value="{{$employee->lastname}}">

    <br>

    <label>Task</label>  <br>
    <select name="tasks[]" multiple>                

        @foreach ($tasks as $task)
            <option value="{{$task -> id}}">
                @if ($employee -> tasks() ->find($task -> id))
                SELECTED 
                @endif
            >{{$task -> title}}
            </option>  
        @endforeach
    </select>

    <br>

    <input type="submit" value="UPDATE" name="">
    </form>
    
@endsection