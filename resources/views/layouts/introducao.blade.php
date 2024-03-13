<!-- Este componente chamado "introdução é o responsavel pela segunda tela, a tela em que o usuário será introduzido a aplicação, sendo guiado pelo assitente de voz"-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Incluvision') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('build/assets/styles/componentes.css')}}">
        <script src="{{ asset('build/assets/scripts/controles.js')}}"></script>

        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@4.7.3/dist/full.min.css" rel="stylesheet" type="text/css" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased static bg-gray-100">
    <div class="flex flex-col items-center justify-center min-h-screen w-screen">
            @if (Route::has('login'))
            <div class="fixed right-4 top-6 flex items-center justify-center">

                <!-- Rounded switch -->
                <label class="switch mx-3">
                <input type="checkbox">
                <span class="slider round"></span>
                </label>

                @auth
                    <a href="{{ url('/dashboard') }}" class="font-weight-bold">Inicio</a>
                @else
                    <a href="{{ route('login') }}" class="font-weight-bold mx-1 hover:bg-slate-800 hover:text-white border-2 rounded py-1 px-2 border-slate-800">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="font-weight-bold mx-1 hover:bg-slate-800 hover:text-white border-2 rounded py-1 px-2 border-slate-800">Registrar-se</a>
                    @endif
                @endauth
            </div>
            @endif


            <div class="flex items-center justify-center absolute left-4 top-32">
                <div class="w-48">
                    <img class="w-48" src="{{ asset('build/assets/images/elementos/mascote.svg') }}" alt="Imagem de um cachorro-robô, o mascote da incluvision">
                </div>
                <div class=" chat chat-start">
                    <div class="chat-bubble"><p id="legenda" >Olá! eu sou o ---, o cão-guia que irá te auxiliar na sua jornada de aprendizado</p></div>
                </div>
            </div>

            <!-- <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('build/assets/images/logos/logo-grande.svg') }}" alt="Logo da plataforma Incluvision">-->

                <!-- Parte que será alterada no js para mudar as legendas -->
                <div class="flex mt-24 items-center justify-center"> </div>

        </div>
    </body>

</html>
