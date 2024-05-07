<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Inicio') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'figtree', sans-serif;

            background-color: #f3f4f6;
            color: #374151;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            box-sizing: border-box;
        }
        header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            padding: 1rem 0;
            text-align: center;
        }
        main {
            padding: 2rem 0;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased" >
    <x-banner />
    <div class="container">
        @livewire('navigation-menu')
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto">
                    {{ $header }}
                </div>
            </header>
        @endif
        <main>
            {{ $slot }}
        </main>
    </div>
    @stack('modals')
    @livewireScripts
</body>
</html>
