@extends('layouts.app')

@section('title')
    ¡Comparte tu historia con el mundo!
@endsection

@section('content')
    <div class=" md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            {{-- Horrible image here --}}
            <form action="" id="dropzone"
                class=" dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">

            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            {{-- <h2 class="text-2xl font-semibold mb-4 text-center">Crea un nuevo post</h2> --}}
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Título de la obra
                    </label>
                    <input type="text" id="title" name="title" placeholder="Introduce el título"
                        class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror" />
                </div>

                <div class="mb-4">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                    <textarea name="description" id="description" placeholder="Descripción de la obra"
                        class="border-gray-300 border p-2 w-full" rows="4"></textarea>
                </div>

                <div class="flex justify-end">
                    <input type="submit" value="Subir"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
