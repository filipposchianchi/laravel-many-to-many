@extends('layouts.base')

@section('content')

<form action="{{route('employee.store')}}" method="post">
        @csrf
        @method('POST')
        <label>Nome</label> <br>
        <input type="text" name="name" placeholder="Inserisci il nome">

        <br>

        <label>Cognome</label> <br>
        <input type="text" name="lastname" placeholder="Inserisci il cognome">
        
        <br>

        <label>Task</label>  <br>
        <select name="tasks[]" multiple>                

            @foreach ($tasks as $task)
                <option value="{{$task -> id}}">{{$task -> title}}</option>  
            @endforeach
        </select>

        <br>
        
        <input type="submit" value="CREATE" name="">
    </form>

  @endsection