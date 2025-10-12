@vite(['resources/css/app.css', 'resources/js/app.js'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head />
        <body>
            {{ $slot }}
        <x-footer />
    </body>
</html>
