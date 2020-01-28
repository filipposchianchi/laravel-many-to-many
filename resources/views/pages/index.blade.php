@extends('layouts.base')

@section('content')


    <ul>
        @foreach ($employees as $employee)

        <li>
            <h5>[{{$employee -> id}}] {{$employee -> name}}  {{$employee -> lastname}} 
                <a href="{{route("employee.edit", $employee -> id)}}"> EDIT</a>
                <a href="{{route("employee.destroy", $employee -> id)}}"> DELETE</a>
            </h5>
            
            <ul>
                @foreach ($employee -> tasks as $task)
                    <li>
                    {{$task -> title}} 
                    </li>
                @endforeach
            </ul>
        </li>
            
        @endforeach
    </ul>
    
@endsection

