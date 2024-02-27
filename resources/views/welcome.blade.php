<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Incluvision</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased static bg-gray-100">
    <div class="flex flex-col items-center justify-center min-h-screen w-screen">
            @if (Route::has('login'))
            <div class="fixed right-4 top-2">
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-weight-bold">Inicio</a>
                @else
                    <a href="{{ route('login') }}" class="font-weight-bold mx-1 my-2  hover:bg-slate-800 hover:text-white border-2 rounded py-1 px-2 border-slate-800">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-weight-bold mx-1 my-2 hover:bg-slate-800 hover:text-white border-2 rounded py-1 px-2 border-slate-800">Registrar-se</a>
                    @endif
                @endauth
            </div>
            @endif

            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('build/assets/images/logos/logo-grande.svg') }}" alt="Logo da plataforma Incluvision"> <!-- Adicionei a classe "mt-3" para adicionar uma margem superior -->
                <p>"Porque a  inclusão é para todos, e a visão vai muito além do que os olhos enxergam."</p>
            </div>

            <div class="flex mt-24 items-center justify-center"><img src="{{ asset('build/assets/icons/hand-pointer.svg') }}" class="dedo" alt="Icone de um dedo"><p>Pressione enter para iniciar</p></div>
</div>


</html>
