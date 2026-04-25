<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <meta name="description" content="">
        <meta name="keywords" content="">

        <!-- Title -->
        <title>@yield('page_title') · Peggy</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Styles -->
        <link href="/css/custom.css" rel="stylesheet">

        <!-- Livewire Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased bg-gray-800 text-gray-800">

        <!-- Content -->
        @yield('content')

        <!-- Push Scripts -->
        @stack('scripts')

        <!-- Livewire Scripts -->
        @livewireScripts

    </body>
</html>
