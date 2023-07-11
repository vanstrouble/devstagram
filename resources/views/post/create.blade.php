@extends('layouts.app')

@section('title')
    ¡Comparte tu historia con el mundo!
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class=" md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            {{-- Horrible image here --}}
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            {{-- <h2 class="text-2xl font-semibold mb-4 text-center">Crea un nuevo post</h2> --}}
            <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="title" class=" mb-2 block uppercase text-gray-500 font-bold">
                        Título de la obra
                    </label>
                    <input type="text" id="title" name="title" placeholder="Dale un título a tu obra"
                        class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror" />
                    @error('title')
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

                <div class="mb-4">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">Descripción</label>
                    <textarea name="description" id="description" placeholder="Cuenta su historia o tu inspiración"
                        class="border p-2 w-full @error('description') border-red-500 @enderror" rows="4"></textarea>
                    @error('description')
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

                <div class="flex justify-end">
                    <input type="submit" value="Publicar"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
