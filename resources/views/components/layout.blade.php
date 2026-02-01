<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes</title>

    @vite('resources/css/app.css')
</head>
<body>
    @if(session('success'))
        <div id='flash' class='p-4 text-center bg-green-50 text-green-500 font-bold'>
            {{ session('success') }}
        </div>
    @endif
    <header>
        <nav>
            <h1>Notes</h1>
            <a href='{{ route("notes.index")  }}' class='btn'>See all notes here.</a>
            <a href='{{ route('notes.create')  }}' class='btn'>Create new note.</a>
        </nav>
    </header>

    <main class='container'>
        {{ $slot }}
    </main>

</body>
</html>
