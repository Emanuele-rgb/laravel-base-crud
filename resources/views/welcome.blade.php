<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
    </head>
    <body>
<header><h1>Eloquent ORM</h1></header>
<main>
    <h2>Students list</h2>

    @foreach ($students as $student)
        <div class='student'>
        <h4>{{ $student->name }}</h4>
        <p>{{ $student->description }}</p>
        </div>
    @endforeach
</main>
    </body>
</html>
