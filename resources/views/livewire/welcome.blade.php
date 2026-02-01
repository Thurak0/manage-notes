<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notes</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center px-8, py-12">
<div>
    <h2>Please login to manage your notes</h2>

    <a href='{{ route('login') }}' class="btn mt4 inline-block">Login</a>

    <a href='{{ route('register') }}' class="btn mt4 inline-block">Register</a>
</div>
</body>
</html>




