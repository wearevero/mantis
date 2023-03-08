<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Morph') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="my-10 w-3/6 mx-auto bg-gradient-to-r from-indigo-400 via-purple-400 to-pink-300" conic-gradient(at 0% 0%, rgb(134, 239, 172), rgb(59, 130, 246), rgb(147, 51, 234))>
        {{ $slot }}
    </body>
</html>
