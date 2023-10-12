<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    <title>@yield('page-title') - {{ $title }}
    </title>
    @vite('resources\js\app.js')
</head>

<body>
    <header>
        @include('partials.header')
    </header>
    <div class="{{ Route::current()->getName() == 'homepage' ? 'bg-black' : 'bg-white' }}">
        <main>@yield('main-contetn')</main>
    </div>
    <footer>FOOTER</footer>
</body>

</html>
