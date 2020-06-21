<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>LARAVEL CRUD</title>
</head>
<body>

    <header class="mb-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="navbar-brand">Boolean</div>

            <div class="ml-auto">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                     <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                     </li>
                     <li class="nav-item">
                    <a href="{{ route('classrooms.index') }}" class="nav-link">Classrooms</a>
                     </li>
                     <li class="nav-item">
                    <a href="{{ route('classrooms.create') }}" class="nav-link">Add classroom</a>
                     </li>
            </ul>
        </div>
        </nav>

    </header>