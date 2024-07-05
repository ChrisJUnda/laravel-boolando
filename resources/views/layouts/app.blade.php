<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    @include('shared.header')
    {{-- /HEADER --}}


    {{-- MAIN --}}
    <main>
        Main layout condiviso
    </main>
    {{-- /MAIN --}}


    {{-- FOOTER --}}
    @include('shared.footer')
    {{-- /FOOTER --}}



    {{-- /Footer --}}
    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}



</body>

</html>
