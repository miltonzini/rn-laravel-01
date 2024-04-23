<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Rednodo Laravel 01 | @yield('title')</title>
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <form class="container-fluid justify-content-start">
                <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('home') }}">Home</a>
                <a class="btn btn-sm btn-outline-secondary mx-2" href="{{ route('login') }}">Login</a>
            </form>
        </nav>
    </header>