<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notes</title>
        @vite('resources/css/app.css')
    </head>
    <body class="text-center px-8, py-12">
           <main>
               <h2>Hello World</h2>

               <a href="/notes" class="btn mt4 inline-block">
                   Manage your notes here.
               </a>

           </main>
    </body>
</html>
