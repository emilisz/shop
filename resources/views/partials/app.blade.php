<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Simple tailwind shop sample">
    {{-- <meta name="theme-color" content="#3b82f6"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}
    <title>Simple shop</title>

    @livewireStyles
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-green-400 to-blue-500">
    @include('partials.header')
        <div class="container m-2 p-3 mx-auto">
            @yield('content')
        </div>
    @include('partials.footer')

    @livewireScripts
</body>
</html>