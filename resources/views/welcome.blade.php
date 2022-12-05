<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel, Vite and Bootstrap</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased p-4">
<div class="alert alert-success">
    I'm a bootstrap alert!
</div>
<h1 class="text-center">Hello Bootstrap</h1>
<p class="mt-5 text-center">
    <a href="#" class="btn btn-success">I'm a bootstrap button!</a>
</p>
</body>
</html>
