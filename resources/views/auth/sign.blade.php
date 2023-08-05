@extends('layouts.app')

@section('title')
    Regístrate en Gallerygram
@endsection

@section('content')
    <div class="md:flex md:justify-center mx-auto w-full items-center md:gap-10">
        <div class=" md:w-6/12 p-5">
            <img src="{{ asset('img/art2.avif') }}" alt="User register image">
        </div>
        <div class=" md:w-4/12 bg-white p-6 rounded-lg shadow-xl sm:w-auto">
            <form action="{{ route('sign') }}" method="POST" novalidate>
                @csrf
                <div class=" mb-5">
                    <label for="name" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="Introduce tu nombre"
                        class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" />
                    @error('name')
                        <div class="bg-red-500 text-white my-2 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-4 w-4">
                                        <path fill-rule="evenodd"
                                            d="M10 1C4.486 1 0 5.486 0 10c0 4.515 4.486 9 10 9 5.515 0 10-4.485 10-9 0-4.514-4.485-9-10-9zm0 16c-3.866 0-7-3.134-7-7 0-3.866 3.134-7 7-7 3.866 0 7 3.134 7 7 0 3.866-3.134 7-7 7zm0-12a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 4a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class=" mb-5">
                    <label for="username" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Introduce un username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror" />
                    @error('username')
                        <div class="bg-red-500 text-white my-2 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-4 w-4">
                                        <path fill-rule="evenodd"
                                            d="M10 1C4.486 1 0 5.486 0 10c0 4.515 4.486 9 10 9 5.515 0 10-4.485 10-9 0-4.514-4.485-9-10-9zm0 16c-3.866 0-7-3.134-7-7 0-3.866 3.134-7 7-7 3.866 0 7 3.134 7 7 0 3.866-3.134 7-7 7zm0-12a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 4a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class=" mb-5">
                    <label for="email" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="text" id="email" name="email" placeholder="Introduce tu email"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" />
                    @error('email')
                        <div class="bg-red-500 text-white my-2 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-4 w-4">
                                        <path fill-rule="evenodd"
                                            d="M10 1C4.486 1 0 5.486 0 10c0 4.515 4.486 9 10 9 5.515 0 10-4.485 10-9 0-4.514-4.485-9-10-9zm0 16c-3.866 0-7-3.134-7-7 0-3.866 3.134-7 7-7 3.866 0 7 3.134 7 7 0 3.866-3.134 7-7 7zm0-12a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 4a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class=" mb-5">
                    <label for="password" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" id="password" name="password" placeholder="Introduce una contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
                    @error('password')
                        <div class="bg-red-500 text-white my-2 rounded-lg p-4">
                            <div class="flex items-center">
                                <div class="mr-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                        class="h-4 w-4">
                                        <path fill-rule="evenodd"
                                            d="M10 1C4.486 1 0 5.486 0 10c0 4.515 4.486 9 10 9 5.515 0 10-4.485 10-9 0-4.514-4.485-9-10-9zm0 16c-3.866 0-7-3.134-7-7 0-3.866 3.134-7 7-7 3.866 0 7 3.134 7 7 0 3.866-3.134 7-7 7zm0-12a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm0 4a1 1 0 0 0-1 1v4a1 1 0 0 0 2 0v-4a1 1 0 0 0-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm">{{ $message }}</p>
                                </div>
                            </div>
                        </div>
                    @enderror
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
