@extends('layouts.app')

@section('title')
    Regístrate en Devstagram
@endsection

@section('content')
    <div class="md:flex md:justify-center mx-auto w-full items-center md:gap-10">
        <div class=" md:w-6/12 p-5">
            <img src="{{ asset('img/register.jpg') }}" alt="User register image">
        </div>
        <div class=" md:w-4/12 bg-white p-6 rounded-lg shadow-xl sm:w-auto">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class=" mb-5">
                    <label for="name" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Name
                    </label>
                    <input type="text" id="name" name="name" placeholder="Introduce tu nombre"
                        class="border p-3 w-full rounded-lg" />
                    @error('name')
                        <p class=" bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">El nombre es obligatorio</p>
                    @enderror
                </div>
                <div class=" mb-5">
                    <label for="username" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Introduce un username"
                        class="border p-3 w-full rounded-lg" />
                </div>
                <div class=" mb-5">
                    <label for="email" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="text" id="email" name="email" placeholder="Introduce tu email"
                        class="border p-3 w-full rounded-lg" />
                </div>
                <div class=" mb-5">
                    <label for="password" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" id="password" name="password" placeholder="Introduce una contraseña"
                        class="border p-3 w-full rounded-lg" />
                </div>
                <div class=" mb-5">
                    <label for="password_confirmation" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Repetir contraseña
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Repite la contraseña" class="border p-3 w-full rounded-lg" />
                </div>
                <input type="submit" value="Crear Cuenta"
                    class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
