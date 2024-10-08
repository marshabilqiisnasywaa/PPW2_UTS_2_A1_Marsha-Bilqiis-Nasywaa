<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Laravel 10 CRUD Application - PPW 2</h1>
    </header>

    <div class="container">
        @yield('content') <!-- Ini bagian untuk menampilkan konten dinamis -->
    </div>
</body>
</html>