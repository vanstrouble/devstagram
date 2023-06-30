<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Devstagram - @yield('title')</title>
        @vite('resources/css/app.css')

    </head>

    <body class="bg-gray-100">
        <header class="p-5 border-b bg-white shadow">
            <div class=" container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    <a href="{{ route('principal') }}" class="text-black">Devstagram</a>
                </h1>
                <nav class=" flex gap-2 items-center">
                    <a class=" font-bold uppercase text-gray-600 text-sm" href="">Login</a>
                    <a class=" font-bold uppercase text-gray-600 text-sm" href="{{ route('register') }}">Crear Cuenta</a>
                </nav>
            </div>
        </header>

        <main class=" container mx-auto mt-10">
            <h2 class=" font-black text-center text-3xl mb-10">
                @yield('title')
            </h2>
            @yield('content')
        </main>

        <footer class="mt-auto fixed bottom-0 left-0 right-0 flex items-center justify-center text-center p-5 text-gray-500 font-bold uppercase text-sm md:justify-self-auto">
            Devstagram - Todos los derechos reservados {{ now()->year }}
        </footer>

    </body>
</html>
