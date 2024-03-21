<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Laravel Livewire 3' }}</title>
    </head>
    <body style="background-color: #0f0d0f; color:aliceblue">
        <div class="container">
            {{ $slot }}
        </div>
    </body>
</html>
