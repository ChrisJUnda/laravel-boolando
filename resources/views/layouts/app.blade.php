<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
</head>

<body>
    {{-- HEADER --}}
    @include('shared.header')
    {{-- /HEADER --}}


    {{-- MAIN --}}
    <main class="p-3">


        <div class="container">
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-4 g-5">
                        @include('shared.foto')
                    </div>
                @endforeach
            </div>
        </div>




    </main>
    {{-- /MAIN --}}


    {{-- FOOTER --}}
    @include('shared.footer')
    {{-- /FOOTER --}}



    {{-- /Footer --}}
    {{-- <img src="{{ Vite::asset('resources/img/duck.jpg') }}" alt="Paperella Laravel Template"> --}}



</body>

</html>
