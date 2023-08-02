@extends('layouts.app')

{{-- @section('title')
    <div class="text-center my-6">
        <h2 class="text-3xl font-bold text-gray-900">Editar Perfil</h2>
        <p class="text-gray-600 text-lg">Usuario: {{ auth()->user()->username }}</p>
    </div>
@endsection --}}

@section('content')
    <div class="text-center my-6">
        <h1 class="text-3xl font-bold text-gray-900">Editar Perfil</h2>
            <p class="text-gray-600 text-lg font-bold">Usuario: {{ auth()->user()->username }}</p>
    </div>
    {{-- <h1>Ur gay</h1> --}}
    <div class=" md:flex md:justify-center">
        <div class=" md:w-1/2 bg-white shadow p-6">
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data" class=" mt-10 md:mt-0">
                @csrf
                <div class=" mb-5">
                    <label for="username" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>
                    <input type="text" id="username" name="username" placeholder="Introduce un username"
                        class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                        value="{{ auth()->user()->username }}" />
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
                    <label for="image" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Profile Image
                    </label>
                    <input type="file" id="image" name="image"
                        class="border p-3 w-full rounded-lg"
                        value="" accept=".jpg, .jpeg, .png, .heic"/>
                </div>
                <input type="submit" value="Guardar cambios"
                    class=" bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
