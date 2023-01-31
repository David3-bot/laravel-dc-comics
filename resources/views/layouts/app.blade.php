<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <title>DC Comics</title>

    @vite('resources/js/app.js')

</head>

<body>

        {{-- header --}}
        @include('partials.header')

    <div>
        {{-- segnaposto per il contenuto di ogni pagina.
        Questo dovrà essere sostituito in ogni pagina con un contenuto diverso --}}
        @yield('content')
    </div>

        {{-- footer --}}
        @include('partials.footer')

</body>

</html>