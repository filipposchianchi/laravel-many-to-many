<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <header>SONO L'HEADER</header>
    <a href="{{route('employee.create')}}">Crea un nuovo Employee</a>

    @yield('content')

    <header>SONO IL FOOTER</header>

    
</body>
</html>