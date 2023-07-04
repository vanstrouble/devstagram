@extends('layouts.app')

@section('title')
    Create a new post
@endsection

@section('content')
    <div class=" md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            Horrible image here
        </div>

        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <h2 class="text-2xl font-semibold mb-4">Create a new post</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Image</label>
                    <input type="file" name="image" id="image" class="border-gray-300 border p-2 w-full"
                        accept="image/*">
                </div>

                <div class="mb-4">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">Description</label>
                    <textarea name="description" id="description" placeholder="Description of the post"
                        class="border-gray-300 border p-2 w-full" rows="4"></textarea>
                </div>

                <div class="flex justify-end">
                    <input type="submit" value="Upload Post"
                        class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
                </div>
            </form>
        </div>
    </div>
@endsection
