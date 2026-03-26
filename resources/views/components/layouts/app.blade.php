<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? 'DS HealthCare' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Load common CSS + JS bundle (app.css + app.js) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('head')
</head>
<body>
    {{ $slot }}

    @stack('scripts')
</body>
</html>


