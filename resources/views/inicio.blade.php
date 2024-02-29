@extends('layouts.inicio')


<!-- Tela que o usuário irá ver ao entrar na aplicação -->
@section('tela-inicial')
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

            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('build/assets/images/logos/logo-grande.svg') }}" alt="Logo da plataforma Incluvision"> <!-- Adicionei a classe "mt-3" para adicionar uma margem superior -->
                <p>"Porque a  inclusão é para todos, e a visão vai muito além do que os olhos enxergam."</p>
            </div>

            <div class="flex mt-24 items-center justify-center"><p>Pressione a tecla <span class="rounded border-2 border-slate-800 py-1 px-3">Enter</span> para iniciar</p></div>

            <button onclick="controleVoz()">ou</button>
    </div>


    <script>
        const audioInicio = new Audio('asset("build/assets/audios/audio-inicio.mp3")')
    </script>
@endsection

<!-- Tela da apresentação da Vi -->
@section('tela-apresentacao')
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

            <div class="flex flex-col items-center justify-center">
                <img src="{{ asset('build/assets/images/logos/logo-grande.svg') }}" alt="Logo da plataforma Incluvision"> <!-- Adicionei a classe "mt-3" para adicionar uma margem superior -->
                <p>"Porque a  inclusão é para todos, e a visão vai muito além do que os olhos enxergam."</p>
            </div>

            <div class="flex mt-24 items-center justify-center"><p>Pressione a tecla <span class="rounded border-2 border-slate-800 py-1 px-3">Enter</span> para iniciar</p></div>


    </div>

@endsection
