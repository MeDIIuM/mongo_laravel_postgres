<!DOCTYPE html>
<html lang="en">

<head>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/book">Библиотека</a>
            </li>
            <li>
                <a class="nav-link"  href="/review">Комментарии</a>
            </li>
            <li>
                <a href="/book/create" class="btn btn-success">Добавить книгу</a>
            </li>
        </ul>
    </div>
</nav>
    @yield('content')
</body>
</html>
