<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Fonts -->
   <link rel="preconnect" href="https://fonts.bunny.net">
   <link href="https://fonts.bunny.net/css?family=inter:200,300,400,500,600,700" rel="stylesheet" />

   {{-- Google Material Icons --}}
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

   <!-- Scripts -->
   @vite(['resources/css/app.css', 'resources/js/app.js'])

   <style>
      [x-cloak] {
         display: none !important;
      }
   </style>

   @stack('styles')
</head>

<body class="font-sans antialiased">
   <div class="min-h-screen text-gray-800 bg-gray-200 md:flex md:flex-col">
      <main class="md:flex md:flex-grow md:overflow-hidden">

         @include('layouts.sidebar')

         <div class="w-full">
            @include('layouts.navigation')

            <div class="h-screen px-0 py-8 sm:px-4 md:px-8 md:overflow-y-auto md:flex-1">
               {{ $slot }}
            </div>
         </div>
      </main>
   </div>

   @stack('scripts')
</body>

</html>
