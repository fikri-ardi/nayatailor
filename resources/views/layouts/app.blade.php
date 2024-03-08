<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('fonts/bootstrap-icons.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Additional Elements -->
    {{ $head ?? null }}
</head>

<body x-data="{blur: false}" class="font-sans antialiased">
    <div class="min-h-screen">
        <livewire:navigation />

        <!-- Page Content -->
        <main class="pt-28 w-10/12 sm:w-11/12 mx-auto">
            {{ $slot }}
        </main>
    </div>

    {{-- Blur Effect --}}
    <div :class="blur ? 'show' : ''"
        class="fixed flex left-0 right-0 bottom-0 top-0 opacity-0 h-screen -translate-y-full backdrop-blur-md transition-all duration-300 z-40">
        <div class="fixed left-0 right-0 bottom-0 top-0 h-screen blur-xl bg-black opacity-0 transition-opacity">
        </div>
    </div>
</body>

</html>