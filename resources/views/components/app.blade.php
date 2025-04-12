<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medical Center</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex justify-between items-center p-4">
      <div class="flex space-x-4">
        <x-nav-link path="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link path="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link path="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </div>
      <div class="flex space-x-2">
         <a href="/new_patient"> 
           <button class="bg-blue-500 text-white text-sm px-2 py-1 rounded-md">New Patient</button>
         </a>
         <a href="/new_doctor">
           <button class="bg-blue-500 text-white text-sm px-2 py-1 rounded-md">New Doctor</button>
         </a>
      </div>
    </div>

    <main>
        {{ $slot }}
    </main>
</body>

</html>