<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- @vite('resources/js/app.js') --}}
        {{-- @vite('resources/css/app.css') --}}
    </head>
    <body class="font-sans bg-gray-100 dark:bg-slate-800 scrollbar-thin">
        @splade
    </body>
</html>
