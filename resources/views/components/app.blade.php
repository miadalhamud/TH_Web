<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Center</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div>
    <x-nav-link path="/" :active="request()->is('/')">Home</x-nav-link>
    <x-nav-link path="/about" :active="request()->is('about')" >About</x-nav-link>
    <x-nav-link path="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </div>
    <div>
        {{ $slot }}
    </div>
</body>

</html>